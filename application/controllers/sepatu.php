<?php class Sepatu extends CI_Controller 
{
	
public function index() 
	{ 
		$this->load->view('view-form-sepatu'); 
	}   
	public function cetak() 
	{ 
	 
		$this->form_validation->set_rules('nama', 'Nama Pembeli', 'required|min_length[3]', 
			array( 
				'required' => 'Nama Pembeli Harus diisi', 
				'min_length' => 'Kode terlalu pendek' )
		); 
		$this->form_validation->set_rules('hp', 'No Handphone', 'required|min_length[3]', 
			array( 
				'required' => 'No Handphone Harus diisi', 'min_length' => 'Nama terlalu pendek' )
		); 
		$this->form_validation->set_rules('ms', 'Merk Sepatu', 'required|min_length[3]', 
			array( 
				'required' => 'Merk Sepatu Harus dipilih', 'min_length' => 'Merek sepatu terlalu pendek' )
		);
		$this->form_validation->set_rules('ns', 'Ukuran Sepatu', 'required|min_length[2]', 
			array( 
				'required' => 'Ukuran Sepatu Harus dipilih', 'min_length' => 'No sepatu terlalu pendek' )
		);
		if ($this->form_validation->run() != true) { $this->load->view('view-form-sepatu');
} 
else 
	{ 
		$data = [ 
			'nama' => $this->input->post('nama'), 
			'hp' => $this->input->post('hp'), 
			'ms' => $this->input->post('ms'), 
			'ns' => $this->input->post('ns') ]; 
			$this->load->view('view-data-sepatu', $data); 
		} 
	} 
}