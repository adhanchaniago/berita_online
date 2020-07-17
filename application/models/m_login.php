<?php
    class m_login extends CI_Model{


        function cek_login($table, $where){
            return $this->db->get_where($table, $where);
        }

        function data_login(){
		return $this->db->get('login');
	}

	

	function tambah_data(){
		$data = array(
			
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'level' => $this->input->post('level'),
			
		);
		$this->db->insert('login', $data);
		redirect('../login');
	}

	function ubah_data ($idLogin){
		$data = array(
			
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'level' => $this->input->post('level'),
			
			
		   );
			$this->db->where(array('idLogin'=> $idLogin));
			$this->db->update('login',$data);
			redirect('../login');
	}

	function hapus_data($idLogin){
		$this->db->where(array('idLogin'=> $idLogin));
		$this->db->delete('login');
		redirect('../login');
	}
    }
?>