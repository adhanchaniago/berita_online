<?php
class M_register extends CI_Model{
	
	//fungsi untuk tampil data pada home
	function tampil_home(){
		return $this->db->get('login');   //mengambil data dari database
	} 
	function tampil_data($id){
		return $this->db->query("SELECT * FROM `login` WHERE idLogin=".$id."");
	}
	
	function tambah_data(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'confirm_password' => $this->input->post('confirm_password'),
			'level' => $this->input->post('level'),
			 
		); 
		$this->db->insert('login', $data);
		redirect('../register');
	}

	
	
}

?> 