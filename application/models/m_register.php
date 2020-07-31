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
			
			'password' => md5($this->input->post('password')),
			 
			'level' => $this->input->post('level'),
			 
		); 
		$this->db->insert('login', $data);
		redirect('../register');
	}

	function tambah_pengguna(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			
			'password' => md5($this->input->post('password')),
			  
			'level' => $this->input->post('level'),
			 
		); 
		$this->db->insert('login', $data);
		redirect('../pengguna');
	}

	function hapus_data($idLogin){
		$this->db->where(array('idLogin'=> $idLogin));
		$this->db->delete('login');
		redirect('../pengguna2');
	}

	function ubah_data ($idLogin){
		$data = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			
			'password' => md5($this->input->post('password')),
			  
			'level' => $this->input->post('level'),
			
			
		   );
			$this->db->where(array('idLogin'=> $idLogin));
			$this->db->update('login',$data);
			redirect('../pengguna2');
	}

	
	
}

?> 