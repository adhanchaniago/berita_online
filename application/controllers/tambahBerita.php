<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambahBerita extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_berita');
		$this->load->model('m_kategori');
		$this->load->helper('url');
	}

	

	public function index() {
	/*	$data['idKategori'] = $this->input->get('id');
		$data['query'] = $this->m_berita->tampil_berita($data['idKategori']);*/
		/*$data['id'] = $this->input->get('id');
		$data['query'] = $this->m_berita->tampil_berita($data['id']);*/
		$data['query'] = $this->m_berita->tampil_home();
		$kategori['query'] = $this->m_kategori->tampil_home();

		$this->load->view('head', $kategori);
		$this->load->view('kelolaBerita/tambahBerita', $data);
		$this->load->view('footer', $data);
	}

	public function index2() {
		/*	$data['idKategori'] = $this->input->get('id');
			$data['query'] = $this->m_berita->tampil_berita($data['idKategori']);*/
			/*$data['id'] = $this->input->get('id');
			$data['query'] = $this->m_berita->tampil_berita($data['id']);*/
			$data['query'] = $this->m_berita->tampil_home();
			$kategori['query'] = $this->m_kategori->tampil_home();
	
			$this->load->view('head', $kategori);
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