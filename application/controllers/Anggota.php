<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| misnu88@gmail.com
| -------------------------------------------------------------------------
*/
class Anggota extends CI_Controller {

	public function __construct(){

		parent::__construct();
   
		if(empty($_SESSION['username']) ) {
		   $this->session->set_flashdata('flash_data', 'You don\'t have access!');
		   return redirect('/');
	   }
   
	}

	public function index()
	{
		$data = array(
			'page' => 'pages/anggota/main',
			'data' => $this->db->query("SELECT a.*, b.status FROM t_pendaftar a LEFT JOIN t_login b ON b.id_pendaftar = a.id")->result(),
	
		);
		
		$this->load->view('template', $data);
	}

	public function form()
	{
		$data = array(
			'page' => 'pages/anggota/form',
			'jurusan' => $this->db->get("t_jurusan")->result()
		);
		
		$this->load->view('template', $data);
	}



	public function save(){


		$data = array(
			'nama' => $_POST['nama'], 
			'asal_sekolah' => $_POST['sekolah'],
			'alamat' => $_POST['alamat'],
			'no_hp' => $_POST['no_hp'],
			'jurusan' => $_POST['jurusan'],
			
		);
		// insert 
		$this->db->insert("t_pendaftar", $data);

		// get data
		$sql = $this->db->where($data)->get("t_pendaftar")->row();


		$data_user = array(
			'username' => $_POST['username'],
			'password' => md5($_POST['password']),
			'id_pendaftar' => $sql->id, 
			'status' => '2',
			'jabatan' => '2',
		);

		// insert 
		$this->db->insert("t_login", $data_user);
		redirect('/anggota');
			

		

	}

	public function form_update($id = null){

		$data = array(
			'page' => 'pages/anggota/form_update',
			'data' => $this->db->where('id', $id)->get('t_pendaftar')->row(),
			'jurusan' => $this->db->get("t_jurusan")->result(),
			'data_user' => $this->db->where('id_pendaftar', $id)->get('t_login')->row()
		);
		
		$this->load->view('template', $data);


	}


	
	public function update($id){

		
		$data = array(
			'nama' => $_POST['nama'], 
			'asal_sekolah' => $_POST['sekolah'],
			'alamat' => $_POST['alamat'],
			'no_hp' => $_POST['no_hp'],
			'jurusan' => $_POST['jurusan'],
			
		);
		// update
		$this->db->set($data)->where('id', $id)->update("t_pendaftar");

		// get data
		$sql = $this->db->where('id',$id)->get("t_pendaftar")->row();

		if(!empty($_POST['username']) && !empty($_POST['password']) ){

			$data_user = array(
				'username' => $_POST['username'],
				'password' => md5($_POST['password']),
				'status' => 2
				
			);
		}elseif(!empty($_POST['username']) && empty($_POST['password']) ){
			$data_user = array(
				'username' => $_POST['username'],
				'status' => 2
			);
		}elseif(empty($_POST['username']) && !empty($_POST['password']) ){
			$data_user = array(
				'password' => md5($_POST['password']),
				'status' => 2
			);
		}
	
		// update
		$this->db->set($data_user)->where('id_pendaftar', $id)->update("t_login");

		redirect('/anggota');
    

	}





	public function delete(){

		$id = $_POST['id'];

		$this->db->where('id', $id)->delete('t_pendaftar');
		redirect('/anggota');
			
	}
	
	
	public function info()
	{
		$id =  $_SESSION['id_pendaftar'];
		$data = array(
			'page' => 'pages/anggota/info',
			'data' => $this->db->where("id", $id)->get("t_pendaftar")->row(),
			'data_user' => $this->db->where("id_pendaftar", $id)->get("t_login")->row(),
	
		);
		
		$this->load->view('template', $data);
	}

}
