<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengguna2 extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
		$this->load->model('m_register');

	}
	

		public function index(){
		$data['query'] = $this->m_login->tampil_home();
		$this->load->view('head', $data   );  
		  $this->load->view('kelolaPengguna/readPengguna', $data);
        $this->load->view('footer', $data);
	}
	public function add(){
		$idLogin = $this->input->post('idLogin');
		
		if(empty($idLogin)) $this->m_register->tambah_pengguna();
		else $this->m_register->ubah_data($idLogin);
	}
	public function delete(){
		$idLogin= $this->input->post('idLogin2');
		$this->m_register->hapus_data($idLogin);
	}
}