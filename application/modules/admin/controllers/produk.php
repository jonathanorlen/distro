<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends MY_Controller {

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
		$this->load->view ('produk/daftar');
		
	}	


	public function tambah()
	{
		$this->load->view ('produk/tambah');
		
	}

	public function simpan_tambah()
	{
		$data['nama'] = $this->input->post("nama");
        $data['keterangan'] = $this->input->post("keterangan");
        $data['harga'] = $this->input->post("harga");
        $data['promo'] = $this->input->post("promo");
        $data['status'] = $this->input->post("status");
        $data['kategori'] = $this->input->post("kategori");
        $insert = $this->db->insert("produk", $data); 
        echo '<div class="alert alert-success" style="position:fixed;z-index:9999999999;top:50px;  ">Sudah tersimpan.</div>';       
		$this->load->view ('produk/daftar');
	}	

	public function detail()
	{		
		$this->load->view ('produk/detail');
		
	}	


	public function ubah()
	{
		$this->load->view ('produk/ubah');
		
	}	


	public function simpan_ubah()
	{
		$kode = $this->input->post("id_produk");
        $data['nama'] = $this->input->post("nama");
        $data['keterangan'] = $this->input->post("keterangan");
        $data['harga'] = $this->input->post("harga");
        $data['promo'] = $this->input->post("promo");
        $data['status'] = $this->input->post("status");
        $data['kategori'] = $this->input->post("kategori");
        $this->db->update( "produk", $data, array('id' => $kode) );
        echo '<div class="alert alert-success">Sudah dirubah.</div>';
        $this->load->view ('produk/daftar');
	}		


	public function hapus(){
    //$kode = $this->input->post("id_produk");

    $key = $_GET['id_produk'];
    $this->db->delete('produk', array('id' => $key) );
    echo '<div class="alert alert-success">Sudah dihapus.</div>';
	$this->load->view ('produk/daftar');                

}

}
