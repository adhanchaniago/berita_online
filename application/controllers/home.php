<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
  function __construct(){
		parent::__construct();
		$this->load->model('m_berita');
		$this->load->model('m_home');
		
	}



	public function index() {
		$data['query'] = $this->m_home->tampil_home();
		$this->load->view('home', $data);
		$this->load->view('footer', $data);
    
	}

	public function desc() {
		$data['query'] = $this->m_home->tampil_desc2();
	//	$data['query'] = $this->m_berita->tampil_login();
		$this->load->view('home', $data);
		$this->load->view('footer', $data);

	}
	public function selanjutnya()
	{
		$data['id'] = $this->input->get('id');
		$data['query'] = $this->m_berita->tampil_data($data['id']);
		$data['data'] = $this->m_berita->jumlah_baca($data['id']);
		
		$this->load->view('home', $data);
		$this->load->view('footer', $data);
	}
}
?>