<?php
class M_berita extends CI_Model{
	
	//fungsi untuk tampil data pada home
	function tampil_home(){
		return $this->db->get('berita');   //mengambil data dari database
	
	} 
	function tampil_kategori($idKategori){
		return $this->db->query("SELECT * FROM berita ,kategori WHERE '".$idKategori."'");
	}
	                              
	
	function tampil_data($id){
		return $this->db->query("SELECT * FROM berita 
            WHERE id=".$id."");
	}

	function tampil_login(){
		return $this->db->query("SELECT * FROM berita, login WHERE berita.idLogin=login.idLogin");
	}
	
	

	function tampil_berita(){
		
		return $this->db->query("SELECT * FROM berita, login
		WHERE berita.idLogin=login.idLogin
		AND login.username = '$_SESSION[username]'	  ");
		
	}

	

	function tampil_desc(){
		return $this->db->query("SELECT * FROM berita, login WHERE berita.idLogin=login.idLogin ORDER BY jml_baca DESC");
	}

	function tampil_desc2(){
		return $this->db->query("SELECT * FROM berita ORDER BY jml_baca DESC");
	}

	

	function jumlah_baca($id){
		return $this->db->query("UPDATE `berita` SET `jml_baca`=`jml_baca`+1 WHERE id=".$id."");
	}

	function tambah_data(){
		$data = array(
		//ini	'idKategori' => $this->input->post('idKategori'),
			'idKategori' => 5,
			'idLogin' => $this->session->userdata('id'),
			'judul_berita' => $this->input->post('judul_berita'),
			'isi_berita' => $this->input->post('isi_berita'),
			 
			 
		); 
		$this->db->insert('berita', $data);
		redirect('../tambahBerita');
	}

	function hapus_data($id){
		$this->db->where(array('id'=> $id));
		$this->db->delete('berita');
		redirect('../readBerita');
	}

	function ubah_data ($id){
		$data = array(
			'idKategori' => 5,
			'idLogin' => $this->session->userdata('id'),
			'judul_berita' => $this->input->post('judul_berita'),
			'isi_berita' => $this->input->post('isi_berita'),
			
			
		   );
			$this->db->where(array('id'=> $id));
			$this->db->update('berita',$data);
			redirect('../readBerita');
	}
	
}

?> 