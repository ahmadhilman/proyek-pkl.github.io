<?php class Latihan2 extends CI_Controller

{ public function index() { echo "Selamat Datang.. selamat belajar Web Programming"; 
$this->load->view('view1'); 
} 
public function penjumlahan($n1, $n2) 
{ 
	$this->load->model('Model1'); 
	$hasil = $this->Model1->jumlah($n1, $n2); 
	echo "Hasil Penjumlahan dari". $n1 ." + ". $n2 ." = " .$hasil; 
} 
}