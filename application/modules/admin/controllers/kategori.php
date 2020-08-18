<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends MY_Controller {

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
		$this->load->view ('ketegori/daftar');
		
	}	


	public function tambah()
	{
		$this->load->view ('ketegori/tambah');
		
	}

	public function simpan_tambah()
	{
		$data['kategori'] = $this->input->post("kategori");
        $data['keterangan'] = $this->input->post("keterangan");
        $data['status'] = $this->input->post("status");
        $insert = $this->db->insert("kategori", $data); 
        echo '<div class="alert alert-success">Sudah tersimpan.</div>';
        $this->load->view ('ketegori/tambah');       
		
	}	

	public function detail()
	{		
		$this->load->view ('ketegori/detail');
		
	}	


	public function ubah()
	{
		$this->load->view ('ketegori/ubah');

		
	}	


	public function simpan_ubah()
	{
		$kode = $this->input->post("id_kategori");
        $data['kategori'] = $this->input->post("kategori");
        $data['keterangan'] = $this->input->post("keterangan");
        $data['status'] = $this->input->post("status");
        $this->db->update( "kategori", $data, array('id' => $kode) );
        echo '<div class="alert alert-success">Data Sudah Di ubah</div>';
        //$this->load->view ('ketegori/ubah'); 
        $this->session->set_flashdata('item', array('message' => 'Record updated successfully','class' => 'success'));
     	$this->redirect('ubah');      
		
	}		


	public function hapus(){
    //$kode = $this->input->post("id_kategori");

    $key = $_GET['id_kategori'];
    $this->db->delete('kategori', array('id' => $key) );
    echo '<div class="alert alert-warning">Data Sudah Di hapus</div>';
    $this->load->view ('ketegori/daftar');     
}


}
