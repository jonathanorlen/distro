<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();/*	
		if ($this->session->userdata('astrosession') == FALSE) {
			redirect(base_url('authenticate'));			
		}*/
	}

	public function index()
	{
		$this->load->view ('berita/daftar');
		
	}	


	public function tambah()
	{
		$this->load->view ('berita/tambah');
		
	}

	public function simpan_tambah()
	{
		$data['judul'] = $this->input->post("judul");
        $data['keterangan'] = $this->input->post("keterangan");
        $data['status'] = $this->input->post("status");
        $insert = $this->db->insert("berita", $data); 
        echo '<div class="alert alert-success">Sudah tersimpan.</div>';
        $this->load->view ('berita/daftar');       
		
	}	

	public function detail()
	{		
		$this->load->view ('berita/detail');
		
	}	


	public function ubah()
	{
		$this->load->view ('berita/ubah');
		
	}	


	public function simpan_ubah()
	{
		$kode = $this->input->post("id_berita");
        $data['judul'] = $this->input->post("judul");
        $data['keterangan'] = $this->input->post("keterangan");
        $data['status'] = $this->input->post("status");
        $this->db->update( "berita", $data, array('id' => $kode) );
        echo '<div class="alert alert-success">Data Sudah Di ubah</div>';
        //$this->load->view ('berita/ubah');       
		
	}		


	public function hapus(){
    //$kode = $this->input->post("id_berita");

    $key = $_GET['id_berita'];
    $this->db->delete('berita', array('id' => $key) );
	
    $this->load->view ('berita/daftar');     
}

}
