<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| misnu88@gmail.com
| -------------------------------------------------------------------------
*/
class Buku extends CI_Controller {

	public function __construct(){

		parent::__construct();
   
	// 	if(empty($_SESSION['username']) ) {
	// 	   $this->session->set_flashdata('flash_data', 'You don\'t have access!');
	// 	   return redirect('/');
	//    }
   
	}

	public function index()
	{
		$data = array(
			'page' => 'pages/buku/main',
			'data' => $this->db->get("t_buku")->result(),
			
		);
		
		$this->load->view('template', $data);
	}

	public function form()
	{
		$data = array(
			'page' => 'pages/buku/form',
			'category' => $this->db->get('t_category')->result(),
			// 'lang' => $this->db->get('tbl_lang')->result(),
		);
		
		$this->load->view('template', $data);
	}



	public function save(){


		$data = array(
			'judul' => $_POST['judul'],
			'pengarang' => $_POST['pengarang'], 
			'penerbit' => $_POST['penerbit'],
			'tahun' => $_POST['tahun'],
			'katagori' => $_POST['category'],
			
		);
		$this->db->insert('t_buku', $data);
		redirect('/buku');
			

		

	}

	public function form_update($id = null){

		$data = array(
			'page' => 'pages/buku/form_update',
			'category' => $this->db->get('t_category')->result(),
			'data' => $this->db->where('id', $id)->get('t_buku')->row()
		);
		
		$this->load->view('template', $data);


	}


	
	public function update($id){

		$data = array(
			'judul' => $_POST['judul'],
			'pengarang' => $_POST['pengarang'], 
			'penerbit' => $_POST['penerbit'],
			'tahun' => $_POST['tahun'],
			'katagori' => $_POST['category'],
		);
		$this->db->set($data)->where('id', $id)->update('t_buku');
		redirect('/buku');
    

	}




	public function faq_detail_delete(){

		$id = $_POST['id'];
		$id2 = $_POST['ids'];

		$this->db->where('id', $id2)->delete('tbl_faqsub');
		redirect('faq/detail/'.$id);
			
	}

	public function delete(){

		$id = $_POST['id'];

		$this->db->where('id', $id)->delete('t_buku');
		redirect('/buku');
			
	}
	
	
	

}
