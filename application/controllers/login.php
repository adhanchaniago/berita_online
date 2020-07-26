<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}
	

	public function index(){
		$this->load->view('login/login');
	}
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->m_login->cek_login("login", $where);
		if($cek->num_rows() > 0){
			foreach ($cek->result() as $row ) {
				
			$data_session = array(
			'username' => $username,
			 'id' => $row->idLogin,
			 'level' => $row->level);

			}
			$this->session->set_userdata($data_session);
			redirect(base_url('welcome'));
		}else{
			echo '<script language="javascript">';
			echo 'alert("username / password Salah!");';
			echo 'window.location = "../login";</script>';
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('home'));
	}
	function sign(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
