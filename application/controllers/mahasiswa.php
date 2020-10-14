<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
	    $this->load->model('model_mahasiswa');
	    $data['hasil']=$this->model_mahasiswa->TampilMahasiswa();
	    $this->load->view('v_mahasiswa',$data);
	}
}