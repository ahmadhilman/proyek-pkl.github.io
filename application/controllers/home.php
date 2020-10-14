<?php 
class Home extends CI_Controller { 
	function __construct() 
	{ 
		parent::__construct(); 
		$this->load->model(['ModelBuku', 'ModelUser', 'ModelBooking']); 
	} 
	public function index() 
	{ 
		$data = [ 'judul' => "Katalog Buku", 'buku' => $this->ModelBuku->getBuku()->result(), ];
				$data['kat'] = $this->db->get('kategori')->result_array();

//jika sudah login dan jika belum login 
		if ($this->session->userdata('email')) 
			{ $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
		$data['user'] = $user['nama'];
		$data['image'] = $user['image']; 
		$this->load->view('templates/templates-user/header', $data); 
		$this->load->view('buku/daftarbuku', $data); 
		$this->load->view('templates/templates-user/modal'); 
		$this->load->view('templates/templates-user/footer', $data); 
	} 
	else { $data['user'] = 'Pengunjung'; 
	$data['image'] = 'default.jpg';
	$this->load->view('templates/templates-user/header', $data); 
	$this->load->view('buku/daftarbuku', $data); 
	$this->load->view('templates/templates-user/modal'); 
	$this->load->view('templates/templates-user/footer', $data); 
} 
}
public function detailBuku() 
{ 
	if ($this->session->userdata('email')) 
	{
	$id = $this->uri->segment(3); 
	$data['kategori'] = $this->ModelBuku->joinKategoriBuku(['buku.id' => $id])->result_array(); 
	$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
	$data['user'] = $user['nama']; 
	$data['judul'] = "Detail Buku";
	$data['image'] = $user['image'];
	$data['buku'] = $this->ModelBuku->bukuWhere(['id' => $this->uri->segment(3)])->result_array();
        
	$this->load->view('templates/templates-user/header', $data); 
	$this->load->view('buku/detail-buku', $data); 
	$this->load->view('templates/templates-user/modal'); 
	$this->load->view('templates/templates-user/footer', $data); 
} 
else{	$id = $this->uri->segment(3); 
	$data['kategori'] = $this->ModelBuku->joinKategoriBuku(['buku.id' => $id])->result_array();
		$data['user'] = 'Pengunjung'; 
		$data['judul'] = "Detail Buku";
		$data['image'] = 'default.jpg';
 
		$data['buku'] = $this->ModelBuku->bukuWhere(['id' => $this->uri->segment(3)])->result_array();
		$this->load->view('templates/templates-user/header', $data); 
		$this->load->view('buku/detail-buku', $data); 
		$this->load->view('templates/templates-user/modal'); 
		$this->load->view('templates/templates-user/footer', $data);

}
}
}
