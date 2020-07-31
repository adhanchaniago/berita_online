<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengguna extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->helper('url');
	}

	

	public function index() {
		$data['query'] = $this->m_login->tampil_home();

		$this->load->view('head', $data);
		$this->load->view('kelolaPengguna/readPengguna', $data);
		$this->load->view('footer', $data);
	}


	public function add(){
		$id = $this->input->post('idLogin');
		
		if(empty($idLogin)) $this->m_login->tambah_data();
		else $this->m_login->ubah_data($id);
	}

	public function delete(){
		$idLogin= $this->input->post('idLogin2');
		$this->m_login->hapus_data($idLogin);
	}
}