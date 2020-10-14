<?php defined('BASEPATH') or exit('No Direct script access allowed'); 
class Laporan extends CI_Controller 
{ 
	function __construct() 
	{ 
		parent::__construct(); 
		$this->load->model(['ModelUser', 'ModelBuku', 'ModelPinjam']); 
	} 
	public function laporan_buku() 
	{ 
		$data['judul'] = 'Laporan Data Buku'; 
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
		$data['buku'] = $this->ModelBuku->getBuku()->result_array(); 
		$data['kategori'] = $this->ModelBuku->getKategori()->result_array(); 
		$this->load->view('templates/header', $data); 
		$this->load->view('templates/sidebar', $data); 
		$this->load->view('templates/topbar', $data); 
		$this->load->view('buku/laporan_buku', $data); 
		$this->load->view('templates/footer'); 
	}
	public function cetak_laporan_buku()
	{
		$data['buku'] = $this->ModelBuku->getBuku()->result_array();
        $data['kategori'] = $this->ModelBuku->getKategori()->result_array();
        $this->load->view('buku/laporan_print_buku',$data);

	}
	public function laporan_buku_pdf()
	{
		{
			$this->load->library('dompdf_gen');
			$data['buku'] = $this->ModelBuku->getBuku()->result_array();
			$this->load->view('buku/laporan_pdf_buku',$data);
			$paper_size = 'A4';//ukuran kertas
            $orientation = 'landscape';//tipe format kertas
            $html = $this->output->get_output();
            $this->dompdf->set_paper($paper_size,$orientation);
            //convert to pdf
            $this->dompdf->load_html($html);
            $this->dompdf->render();
            $this->dompdf->stream("laporan_data_buku.pdf", array('attachment'=>0));
            //nama pdf yg dihasikan
		}
	}
	public function export_excel()
	{
		$data = array('title' => 'laporan_buku','buku'=>$this->ModelBuku->getBuku()->result_array());
		$this->load->view('buku/export_excel_buku',$data);
	}
	public function laporan_anggota() 
	{ 
		$data['judul'] = 'Laporan Data Anggota'; 
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->db->where('role_id', 1); 
		$data['anggota'] = $this->db->get('user')->result_array();

		$this->load->view('templates/header', $data); 
		$this->load->view('templates/sidebar', $data); 
		$this->load->view('templates/topbar', $data); 
		$this->load->view('member/laporan_anggota', $data); 
		$this->load->view('templates/footer'); 
	}
	public function cetak_laporan_anggota()
	{
		$this->db->where('role_id', 1);
        $data['anggota'] = $this->db->get('user')->result_array();
        $this->load->view('member/laporan_print_anggota',$data);

	}
	public function laporan_anggota_pdf()
	{
		{
			$this->load->library('dompdf_gen');
			$this->db->where('role_id', 1);
			$data['anggota'] = $this->ModelUser->cekData()->result_array();
			$this->load->view('member/laporan_pdf_anggota',$data);
			$paper_size = 'A4';//ukuran kertas
            $orientation = 'landscape';//tipe format kertas
            $html = $this->output->get_output();
            $this->dompdf->set_paper($paper_size,$orientation);
            //convert to pdf
            $this->dompdf->load_html($html);
            $this->dompdf->render();
            $this->dompdf->stream("laporan_data_anggota.pdf", array('attachment'=>0));
            //nama pdf yg dihasikan
		}
	}
	public function export_excel_anggota()
	{
		$this->db->where('role_id', 1);

		$data = array('title' => 'laporan_anggota','anggota'=>$this->ModelUser->cekData()->result_array());
		$this->load->view('member/export_excel_anggota',$data);
	}
	public function laporan_pelanggan() 
	{ 
		$data['judul'] = 'Laporan Data Pelanggan'; 
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->db->where('role_id', 2); 
		$data['anggota'] = $this->db->get('user')->result_array();

		$this->load->view('templates/header', $data); 
		$this->load->view('templates/sidebar', $data); 
		$this->load->view('templates/topbar', $data); 
		$this->load->view('member/laporan_pelanggan', $data); 
		$this->load->view('templates/footer'); 
	}
	public function cetak_laporan_pelanggan()
	{
		$this->db->where('role_id', 2);
        $data['anggota'] = $this->db->get('user')->result_array();
        $this->load->view('member/laporan_print_pelanggan',$data);

	}
	public function laporan_pelanggan_pdf()
	{
		{
			$this->load->library('dompdf_gen');
			$this->db->where('role_id', 2);
			$data['anggota'] = $this->ModelUser->cekData()->result_array();
			$this->load->view('member/laporan_pdf_pelanggan',$data);
			$paper_size = 'A4';//ukuran kertas
            $orientation = 'landscape';//tipe format kertas
            $html = $this->output->get_output();
            $this->dompdf->set_paper($paper_size,$orientation);
            //convert to pdf
            $this->dompdf->load_html($html);
            $this->dompdf->render();
            $this->dompdf->stream("laporan_data_pelanggan.pdf", array('attachment'=>0));
            //nama pdf yg dihasikan
		}
	}
	public function export_excel_pelanggan()
	{
		$this->db->where('role_id', 2);

		$data = array('title' => 'laporan_pelanggan','anggota'=>$this->ModelUser->cekData()->result_array());
		$this->load->view('member/export_excel_pelanggan',$data);
	}
	public function laporan_pinjam() 
	{ 
		$data['judul'] = 'Laporan Data Peminjaman'; 
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(); 
		$data['laporan'] = $this->db->query("select * from pinjam p,detail_pinjam d, buku b,user u where d.id_buku=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array(); 
		$this->load->view('templates/header', $data); 
		$this->load->view('templates/sidebar'); 
		$this->load->view('templates/topbar', $data); 
		$this->load->view('pinjam/laporan-pinjam', $data); 
		$this->load->view('templates/footer'); 
	}
	public function cetak_laporan_pinjam() 
	{ 
		$data['laporan'] = $this->db->query("select * from pinjam p,detail_pinjam d, buku b,user u where d.id_buku=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array(); 
		$this->load->view('pinjam/laporan-print-pinjam', $data); 
	}
	public function laporan_pinjam_pdf() 
	{ 
		{ 
			$this->load->library('dompdf_gen'); 
			$data['laporan'] = $this->db->query("select * from pinjam p,detail_pinjam d, buku b,user u where d.id_buku=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array();
			$this->load->view('pinjam/laporan-pdf-pinjam', $data); 
			$paper_size = 'A4'; 
			// ukuran kertas 
			$orientation = 'landscape'; 
			//tipe format kertas potrait atau landscape 
			$html = $this->output->get_output(); 
			$this->dompdf->set_paper($paper_size, $orientation); 
			//Convert to PDF 
			$this->dompdf->load_html($html); 
			$this->dompdf->render(); 
			$this->dompdf->stream("laporan data peminjaman.pdf", array('Attachment' => 0)); 
			// nama file pdf yang di hasilkan 
		} 
	}
	public function export_excel_pinjam() 
	{ 
		$data = array( 'title' => 'Laporan_Data_Peminjaman_Buku', 'laporan' => $this->db->query("select * from pinjam p,detail_pinjam d, buku b,user u where d.id_buku=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array()); 
		$this->load->view('pinjam/export-excel-pinjam', $data); 
	}
}