<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
  function __construct(){
		parent::__construct();
		$this->load->model('m_berita');
		$this->load->helper('url');
		
		
	}



	public function index() {
		$data['query'] = $this->m_berita->tampil_login();
		$this->load->view('home', $data);
		$this->load->view('home/beranda2', $data);
		$this->load->view('footer', $data);
    
	}

	public function desc() {
		$data['query'] = $this->m_berita->tampil_desc();
	//	$data['query'] = $this->m_berita->tampil_login();
		$this->load->view('home', $data);
		$this->load->view('home/beranda2', $data);
		$this->load->view('footer', $data);

	}
	public function selanjutnya()
	{
		$data['id'] = $this->input->get('id');
		$data['query'] = $this->m_berita->tampil_data($data['id']);
		$data['data'] = $this->m_berita->jumlah_baca($data['id']);
		
		$this->load->view('home', $data);
		$this->load->view('home/lanjutBaca2', $data);
		$this->load->view('footer', $data);
	}

	
}
?>