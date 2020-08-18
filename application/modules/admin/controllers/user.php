<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

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
		$this->load->view ('user/daftar');
		
	}	


	public function tambah()
	{
		$this->load->view ('user/tambah');
		
	}

	public function simpan_tambah()
	{
		$data['nama'] = $this->input->post("nama");
        $data['alamat'] = $this->input->post("alamat");
        $data['telp'] = $this->input->post("telp");
        $insert = $this->db->insert("anggota", $data); 
        echo '<div class="alert alert-success">Sudah tersimpan.</div>';       
		
	}	

	public function detail()
	{		
		$this->load->view ('user/detail');
		
	}	


	public function ubah()
	{
		$this->load->view ('user/ubah');
		
	}	


	public function simpan_ubah()
	{
		$kode = $this->input->post("id_anggota");
        $data['nama'] = $this->input->post("nama");
        $data['alamat'] = $this->input->post("alamat");
        $data['telp'] = $this->input->post("telp");
        $this->db->update( "anggota", $data, array('id' => $kode) );
        echo '<div class="alert alert-success">Sudah dirubah.</div>';  
		
	}		


	public function hapus(){
    //$kode = $this->input->post("id_anggota");

    $key = $_GET['id_anggota'];
    $this->db->delete('anggota', array('id' => $key) );

    echo '<div class="alert alert-success">Sudah dihapus.</div>';            

}

}
