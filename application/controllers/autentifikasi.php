<?php

class Autentifikasi extends CI_Controller
{

    public function index()
    {
        //jika statusnya sudah login, maka tidak bisa mengakses halaman login alias dikembalikan ke tampilan user
        if($this->session->userdata('email')){
            redirect('admin');
        }

        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email', [
            'required' => 'Email Harus diisi!!',
            'valid_email' => 'Email Tidak Benar!!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password Harus diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $data['user'] = '';
            //kata 'login' merupakan nilai dari variabel judul dalam array $data dikirimkan ke view aute_header
            $this->load->view('templates/aute_header', $data);
            $this->load->view('autentifikasi/login');
            $this->load->view('templates/aute_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email', true));
        $password = $this->input->post('password', true);

        $user = $this->ModelUser->cekData(['email' => $email])->row_array();

        //jika usernya ada
        if ($user) {
            //jika user sudah aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);
                    redirect('admin');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
                    redirect('autentifikasi');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">User belum diaktifasi!!</div>');
                redirect('autentifikasi');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!!</div>');

            redirect('autentifikasi');
        }
    }

    public function registrasi()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        //membuat rule untuk inputan nama agar tidak boleh kosong dengan membuat pesan error dengan 
        //bahasa sendiri yaitu 'Nama Belum diisi'
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
            'required' => 'Nama Belum diis!!'
        ]);
        //membuat rule untuk inputan email agar tidak boleh kosong, tidak ada spasi, format email harus valid
        //dan email belum pernah dipakai sama user lain dengan membuat pesan error dengan bahasa sendiri 
        //yaitu jika format email tidak benar maka pesannya 'Email Tidak Benar!!'. jika email belum diisi,
        //maka pesannya adalah 'Email Belum diisi', dan jika email yang diinput sudah dipakai user lain,
        //maka pesannya 'Email Sudah dipakai'
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email|is_unique[user.email]', [
            'valid_email' => 'Email Tidak Benar!!',
            'required' => 'Email Belum diisi!!',
            'is_unique' => 'Email Sudah Terdaftar!'
        ]);
        //membuat rule untuk inputan password agar tidak boleh kosong, tidak ada spasi, tidak boleh kurang dari
        //dari 3 digit, dan password harus sama dengan repeat password dengan membuat pesan error dengan  
        //bahasa sendiri yaitu jika password dan repeat password tidak diinput sama, maka pesannya
        //'Password Tidak Sama'. jika password diisi kurang dari 3 digit, maka pesannya adalah 
        //'Password Terlalu Pendek'.
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password Tidak Sama!!',
            'min_length' => 'Password Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password1]');
        //jika jida disubmit kemudian validasi form diatas tidak berjalan, maka akan tetap berada di
        //tampilan registrasi. tapi jika disubmit kemudian validasi form diatas berjalan, maka data yang 
        //diinput akan disimpan ke dalam tabel user
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi Member';
            $this->load->view('templates/aute_header', $data);
            $this->load->view('autentifikasi/registrasi');
            $this->load->view('templates/aute_footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 1,
                'is_active' => 0,
                'tanggal_input' => time()
            ];
            $token = base64_encode(random_bytes(32));
            $user_token = [
              'email' => $email,
              'token' => $token,
              'date_created' => time()  
            ];

            $this->ModelUser->simpanData($data); 
             $this->db->insert('user_token',$user_token); //menggunakan model
$this->_sendEmail($token, 'verify');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! akun member anda sudah dibuat. Silahkan Aktivasi Akun anda</div>');
            redirect('autentifikasi');
        }
    }
    private function _sendEmail($token, $type, $data)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'hilmanahmad089@gmail.com',
            'smtp_pass' => 'romadlan089',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];
      $this->load->library('email', $config);
      $this->email->from('hilmanahmad089@gmail.com','Ahmad Hilman Romadlan');
      $this->email->to($this->input->post('email'));
      if($type=='verify'){

      $this->email->subject('Aktifkan Akun/Pusbok');
      $this->email->message($this->load->view('templates/header', '', true),
            $this->load->view('templates/sidebar', '', true),
            $this->load->view('templates/topbar','', true),
            $this->load->view('buku/index','', true),
            $this->load->view('templates/footer','', true));
      }else if($type=='forgot'){

      $this->email->subject('Merubah Password/Pusbook');
      $this->email->message('klik Link Ini Untuk Merubah Password Anda:
      <a href="'. base_url() . 'autentifikasi/resetpassword?email=' . $this->input->post('email'). '&token=' . urlencode($token) .'">Reset Password </a>');
  }
      if($this->email->send()) {
        return true;
      }
      else {
        echo $this->email->print_debugger();
        die;
      }
    }
    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
                if($user_token){
            if(time() - $user_token['date_created'] < (60 * 60 * 24)){
              $this->db->set('is_active', 1);
              $this->db->where('email', $email);  
            $this->db->update('user');
            
            $this->db->delete('user_token', ['email' => $email]);
                             $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">'. $email .' Sudah Aktif!!Silahkan Login</div>');
        redirect('autentifikasi');

            }else{
                $this->db->delete('user', ['email' => $email]);
                $this->db->delete('user_token', ['token' => $token]);

                 $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Aktivasi gagal!!token expaied</div>');
        redirect('autentifikasi');
            }
        }
        else{
                        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Aktivasi gagal!!token salah</div>');
        redirect('autentifikasi');}
        
        }else{
$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Aktivasivasi gagal!!email salah</div>');
        redirect('autentifikasi');
        }

    }

    public function lupaPassword() 
{   $this->form_validation->set_rules('email','Email','trim|required|valid_email'); 
    if($this->form_validation->run() == false){

$data['judul'] = 'Lupa Password'; 
$this->load->view('templates/aute_header', $data); 
$this->load->view('autentifikasi/lupa-password'); 
$this->load->view('templates/aute_footer');
}
else{
    $email  = $this->input->post('email');
    $user = $this->db->get_where('user',['email' => $email, 'is_active'])->row_array();

    if($user){
      $token = base64_encode(random_bytes(32));
      $user_token = [
        'email' => $email,
        'token' => $token,
        'date_created' => time()
        
         ];
         $this->db->insert('user_token', $user_token);
         $this->_sendEmail($token, 'forgot');
         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">pleaase cek email anda untuk merubah password!!</div>');
        redirect('autentifikasi');

    }else{
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email Belum Terdaftar Atau Belum Aktif!!</div>');
        redirect('autentifikasi/lupaPassword');

    }
}
}
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telah logout!!</div>');
        redirect('autentifikasi');
    }

    public function blok()
    {
        $this->load->view('autentifikasi/blok');
    }

    public function gagal()
    {
        $this->load->view('autentifikasi/gagal');
    }
public function resetpassword()
{
  $email = $this->input->get('email');
  $token = $this->input->get('token');

  $user = $this->db->get_where('user', ['email' => $email])->row_array();
   if($user) {
    $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

    if($user_token){
       $this->session->set_flashdata('reset_email', $email);
       $this->changepassword();
    }else{$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Ubah Password Gagal!Token Salah!</div>');
        redirect('autentifikasi/lupaPassword');

    }

   }else{$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Ubah Password Gagal!Email Salah!</div>');
        redirect('autentifikasi/lupaPassword');
}
}
public function changepassword()
{  if(!$this->session->userdata('reset_email')){
    redirect('autentifikasi');
}
   $this->form_validation->set_rules('password1', 'Password','trim|required|min_length[3]|matches[password2]');
   $this->form_validation->set_rules('password2', 'Repeat Password','trim|required|min_length[3]|matches[password1]');
if($this->form_validation->run() == false){
$data['judul'] = 'Ubah Password'; 
$this->load->view('templates/aute_header', $data); 
$this->load->view('autentifikasi/new-password'); 
$this->load->view('templates/aute_footer');
}
else {
    $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
    $email = $this->session->userdata('reset_email');

    $this->db->set('password', $password);
    $this->db->where('email', $email);
    $this->db->update('user');

    $this->session->unset_userdata('reset_email');
    $this->session->set_flashdata('pesan', '<div class="alert alert-succes alert-message" role="alert">Password Berhasil Diubah</div>');
        redirect('autentifikasi');
}
}
    
}
