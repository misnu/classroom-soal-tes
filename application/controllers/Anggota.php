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
			'data' => $this->db->get("t_anggota")->result(),
			
		);
		
		$this->load->view('template', $data);
	}

	public function form()
	{
		$data = array(
			'page' => 'pages/anggota/form',
		);
		
		$this->load->view('template', $data);
	}



	public function save(){


		$data = array(
			'nama' => $_POST['nama'],
			'jk' => $_POST['jk'], 
			'ktp' => $_POST['ktp'],
			'telepon' => $_POST['telepon'],
			'alamat' => $_POST['alamat'],
			
		);
		$this->db->insert('t_anggota', $data);
		redirect('/anggota');
			

		

	}

	public function form_update($id = null){

		$data = array(
			'page' => 'pages/anggota/form_update',
			'category' => $this->db->get('t_category')->result(),
			'data' => $this->db->where('id', $id)->get('t_anggota')->row()
		);
		
		$this->load->view('template', $data);


	}


	
	public function update($id){

		
		$data = array(
			'nama' => $_POST['nama'],
			'jk' => $_POST['jk'], 
			'ktp' => $_POST['ktp'],
			'telepon' => $_POST['telepon'],
			'alamat' => $_POST['alamat'],
			
		);
		$this->db->set($data)->where('id', $id)->update('t_anggota');
		redirect('/anggota');
    

	}




	public function faq_detail_delete(){

		$id = $_POST['id'];
		$id2 = $_POST['ids'];

		$this->db->where('id', $id2)->delete('tbl_faqsub');
		redirect('faq/detail/'.$id);
			
	}

	public function delete(){

		$id = $_POST['id'];

		$this->db->where('id', $id)->delete('t_anggota');
		redirect('/anggota');
			
	}
	
	
	

}
