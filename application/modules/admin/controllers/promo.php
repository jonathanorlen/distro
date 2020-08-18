<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class promo extends MY_Controller {

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
		$this->load->view ('promo/daftar');
		
	}	


	public function tambah()
	{
		$this->load->view ('promo/tambah');
		
	}

	public function simpan_tambah()
	{
		$data['promo'] = $this->input->post("promo");
        $data['potongan'] = $this->input->post("potongan");
        $data['status'] = $this->input->post("status");
        $insert = $this->db->insert("promo", $data); 
        echo '<div class="alert alert-success">Sudah tersimpan.</div>';
        $this->load->view ('promo/daftar');       
		
	}	

	public function detail()
	{		
		$this->load->view ('promo/detail');
		
	}	


	public function ubah()
	{
		$this->load->view ('promo/ubah');
		
	}	


	public function simpan_ubah()
	{
		$kode = $this->input->post("id_promo");
        $data['promo'] = $this->input->post("promo");
        $data['potongan'] = $this->input->post("potongan");
        $data['status'] = $this->input->post("status");
        $this->db->update( "promo", $data, array('id' => $kode) );
        echo '<div class="alert alert-success">Data Sudah Di ubah</div>';
        $this->load->view ('promo/daftar');       
		
	}		


	public function hapus(){
    //$kode = $this->input->post("id_promo");

    $key = $_GET['id_promo'];
    $this->db->delete('promo', array('id' => $key) );
    echo '<div class="alert alert-warning">Data Sudah Di hapus</div>';
    $this->load->view ('promo/daftar');     
}

}
