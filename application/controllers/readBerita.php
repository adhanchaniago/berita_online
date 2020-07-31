<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class readBerita extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_berita');
		$this->load->model('m_kategori');
		$this->load->helper('url');
	}

	

	public function index() {
		$data['id'] = $this->input->get('id');
		$data['query'] = $this->m_berita->tampil_home($data['id']);
			//$data['query'] = $this->m_berita->tampil_berita();
		//	$kategori['query'] = $this->m_kategori->tampil_home();
	
			$this->load->view('head', $data);
			$this->load->view('kelolaBerita/readBerita', $data);
			$this->load->view('footer', $data);
		}

	public function add(){
		$id = $this->input->post('id');
		
		if(empty($id)) $this->m_berita->tambah_data();
		else $this->m_berita->ubah_data($id);
	}

	public function delete(){
		$id= $this->input->post('id2');
		$this->m_berita->hapus_data($id);
	}
}

