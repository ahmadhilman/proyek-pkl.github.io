<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        cek_user();
    }

    public function index()
    {
        $data['judul'] = 'Profil Saya';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function anggota()
    {$id = $this->uri->segment(3); 
        $data['judul'] = 'Data Anggota';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->db->where('role_id', 1);
        
$data['anggota'] = $this->db->get('user')->result_array();
                $data['role'] = $this->ModelUser->joindata();; 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/anggota', $data);
        $this->load->view('templates/footer');
    }
        public function pelanggan()
    {$id = $this->uri->segment(3); 
        $data['judul'] = 'Data Pelanggan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->db->where('role_id', 2);
        
$data['anggota'] = $this->db->get('user')->result_array();
                $data['role'] = $this->ModelUser->joindata(); 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/pelanggan', $data);
        $this->load->view('templates/footer');
    }
    public function data_user() 
{ 
$data['judul'] = 'Data User'; 
$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
$data['role'] = $this->ModelUser->joindata();
$data['anggota'] = $this->db->get('user')->result_array(); 
$data['status'] = $this->db->get('role')->result_array();  
$this->form_validation->set_rules('nama', 'Nama User', 'required|min_length[3]', [
            'required' => 'Nama user harus diisi',
            'min_length' => 'Nama User terlalu pendek'
        ]);
        $this->form_validation->set_rules('role_id', 'Status', 'required', [
            'required' => 'Status harus diisi',
        ]);
$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [ 'required' => 'Nama Belum diis!!' ]); 
            $this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required', [ 'required' => 'Alamat Belum diis!!' ]);
$this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email|is_unique[user.email]', [ 'valid_email' => 'Email Tidak Benar!!', 'required' => 'Email Belum diisi!!', 'is_unique' => 'Email Sudah Terdaftar!' ]); 
$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [ 'matches' => 'Password Tidak Sama!!', 'min_length' => 'Password Terlalu Pendek' ]); 
$this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password1]'); 
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat harus diisi'        ]);

        //konfigurasi sebelum gambar diupload

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/data_user', $data);
            $this->load->view('templates/footer');
        } else {
            $gambar = 'default.jpg';
            $email = $this->input->post('email', true);
            $data = [
                'nama' => $this->input->post('nama', true),
                'role_id' => $this->input->post('role_id', true),
                'alamat' => $this->input->post('alamat', true),
                'email' => htmlspecialchars($email),
                 'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'is_active' => 1,
                'image' => $gambar
            ];

            $this->ModelUser->simpanData($data);
            redirect('user/data_user');
        }
    }
public function ubahprofil() 
{
$data['judul'] = 'Ubah Profil'; 
$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
       

$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', [ 'required' => 'Nama tidak Boleh Kosong' ]); 
if ($this->form_validation->run() == !true) 
{ 
$this->load->view('templates/header', $data); 
$this->load->view('templates/sidebar', $data); 
$this->load->view('templates/topbar', $data); 
$this->load->view('user/ubah-profile', $data); 
$this->load->view('templates/footer'); 
} 
else 
{ 
$nama = $this->input->post('nama', true); 
$email = $this->input->post('email', true); 
$jk = $this->input->post('jk', true); 
$tempat = $this->input->post('tempat_lahir', true); 
$tgl = $this->input->post('tgl_lahir', true); 
$agama = $this->input->post('agama', true);
$telp = $this->input->post('telepon', true); 
$alamat = $this->input->post('alamat', true); 
 
//jika ada gambar yang akan diupload8
$upload_image = $_FILES['image']['name']; 
if ($upload_image) { $config['upload_path'] = './assets/img/profile/'; $config['allowed_types'] = 'gif|jpg|png'; $config['max_size'] = '3000'; 
$config['max_width'] = '1024'; 
$config['max_height'] = '1000'; 
$config['file_name'] = 'pro' . time(); 
$this->load->library('upload', $config); 
if ($this->upload->do_upload('image')) 
    { 
        $gambar_lama = $data['user']['image']; 
        if ($gambar_lama != 'default.jpg') 
            { 
                unlink(FCPATH . 'assets/img/profile/' . $gambar_lama); 
            } 
            $gambar_baru = $this->upload->data('file_name'); 
            $this->db->set('image', $gambar_baru); 
        } 
        else 
            { 
            } 
        } 
        $this->db->set('nama', $nama);
        $this->db->set('jk', $jk);
        $this->db->set('tempat_lahir', $tempat);
        $this->db->set('tgl_lahir', $tgl);
        $this->db->set('telepon', $telp);
        $this->db->set('agama', $agama);
        $this->db->set('alamat', $alamat); 
        $this->db->where('email', $email); 
        $this->db->update('user'); 
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Profil Berhasil diubah </div>'); redirect('user'); 
    } 
} 


    public function ubahUser()
{  $id = $this->uri->segment(3);
$data['judul'] = 'Ubah User'; 
  $data['users'] = $this->ModelUser->getUserWhere(['id' => $this->uri->segment(3)])->result_array();
$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', [ 'required' => 'Nama tidak Boleh Kosong' ]); 
if ($this->form_validation->run() == !true) 
{ 
$this->load->view('templates/header', $data); 
$this->load->view('templates/sidebar', $data); 
$this->load->view('templates/topbar', $data); 
$this->load->view('user/ubah-user', $data); 
$this->load->view('templates/footer'); 
} 
else 
{ 
$nama = $this->input->post('nama', true); 
$email = $this->input->post('email', true); 
$jk = $this->input->post('jk', true); 
$tempat = $this->input->post('tempat_lahir', true); 
$tgl = $this->input->post('tgl_lahir', true); 
$agama = $this->input->post('agama', true);
$telp = $this->input->post('telepon', true); 
$alamat = $this->input->post('alamat', true); 
 
//jika ada gambar yang akan diupload8
$upload_image = $_FILES['image']['name']; 
if ($upload_image) { $config['upload_path'] = './assets/img/profile/'; $config['allowed_types'] = 'gif|jpg|png'; $config['max_size'] = '3000'; 
$config['max_width'] = '1024'; 
$config['max_height'] = '1000'; 
$config['file_name'] = 'pro' . time(); 
$this->load->library('upload', $config); 
if ($this->upload->do_upload('image')) 
    { 
        $gambar_lama = $data['user']['image']; 
        if ($gambar_lama != 'default.jpg') 
            { 
                unlink(FCPATH . 'assets/img/profile/' . $gambar_lama); 
            } 
            $gambar_baru = $this->upload->data('file_name'); 
            $this->db->set('image', $gambar_baru); 
        } 
        else 
            { 
            } 
        } 
        $this->db->set('nama', $nama);
        $this->db->set('jk', $jk);
        $this->db->set('tempat_lahir', $tempat);
        $this->db->set('tgl_lahir', $tgl);
        $this->db->set('telepon', $telp);
        $this->db->set('agama', $agama);
        $this->db->set('alamat', $alamat); 
        $this->db->where('email', $email); 
        $this->db->update('user'); 
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Profil Berhasil diubah </div>'); redirect('user/data_user'); 
    } 
} 
    public function ubahPassword()
    {
        $data['judul'] = 'Ubah Password';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('password_sekarang', 'Password Saat ini', 'required|trim', [
            'required' => 'Password saat ini harus diisi'
        ]);

        $this->form_validation->set_rules('password_baru1', 'Password Baru', 'required|trim|min_length[4]|matches[password_baru2]', [
            'required' => 'Password Baru harus diisi',
            'min_length' => 'Password tidak boleh kurang dari 4 digit',
            'matches' => 'Password Baru tidak sama dengan ulangi password'
        ]);

        $this->form_validation->set_rules('password_baru2', 'Konfirmasi Password Baru', 'required|trim|min_length[4]|matches[password_baru1]', [
            'required' => 'Ulangi Password harus diisi',
            'min_length' => 'Password tidak boleh kurang dari 4 digit',
            'matches' => 'Ulangi Password tidak sama dengan password baru'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/ubah-password', $data);
            $this->load->view('templates/footer');
        } else {
            $pwd_skrg = $this->input->post('password_sekarang', true);
            $pwd_baru = $this->input->post('password_baru1', true);
            if (!password_verify($pwd_skrg, $data['user']['password'])) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password Saat ini Salah!!! </div>');
                redirect('user/ubahPassword');
            } else {
                if ($pwd_skrg == $pwd_baru) {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password Baru tidak boleh sama dengan password saat ini!!! </div>');
                    redirect('user/ubahPassword');
                } else {
                    //password ok
                    $password_hash = password_hash($pwd_baru, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Password Berhasil diubah</div>');
                    redirect('user/ubahPassword');
                }
            }
        }
    }
    public function hapusUser()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelUser->hapususer($where);
        redirect('user/anggota');
    }
        public function aktivasi()
    {
        $id = $this->uri->segment(3);
                    $data = [
                               'is_active' => 1
                
            ];
        $this->ModelUser->updateUser($data);
        redirect('user/data_user');
    }
}
