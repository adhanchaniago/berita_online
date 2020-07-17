<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_register');
	}
	

	public function index(){
		$this->load->view('login/register');
	}
	public function add(){
		$idLogin = $this->input->post('idLogin');
		
		if(empty($idLogin)) $this->m_register->tambah_data();
		else $this->m_register->ubah_data($idLogin);
	}
}
