<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	/*
| -------------------------------------------------------------------------
| misnu88@gmail.com
| -------------------------------------------------------------------------
*/

	public function index()
	{
		$data = array(
			'page' => 'pages/users/main',
			'data' => $this->db->where('level', 2)->get('t_login')->result(),
		);
		
		$this->load->view('template', $data);
	}

	public function form()
	{
		$data = array(
			'page' => 'pages/users/form',
			
		);
		
		$this->load->view('template', $data);
	}



	public function save(){
		$this->load->library('mailer');
		
		$data =  array(
			'username' => $_POST['username'],
			'password' => md5($_POST['password']), 
			'email' => $_POST['email'],
			'status' => '1',
			'level' => '2',
		);

	    $sendmail = array(
			'email_penerima'=>$_POST['email']
		);

		$this->mailer->send_with_attachment($sendmail);

		$this->db->insert('tbl_users', $data);
		redirect('/users');
		
	}

	public function form_update($id = null){

		$data = array(
			'page' => 'pages/users/form_update',
			'data' => $this->db->where('id', $id)->get('tbl_users')->row(),
			
		);
		
		$this->load->view('template', $data);


	}


	
	public function update($id = null){
		$this->load->library('mailer');

		if(empty($_POST['password'])){
			$data =  array(
				'username' => $_POST['username'],
				'email' => $_POST['email'],
			
				'level' => '2',
			);

		}else{
			$data =  array(
				'username' => $_POST['username'],
				'email' => $_POST['email'],
				'password' => md5($_POST['password']), 
				'level' => '2',
			);
		}

		

		$sendmail = array(
			'email_penerima'=>$_POST['email']
		);

		$this->mailer->send_with_attachment($sendmail);
		
			$this->db->where('id', $id)->set($data)->update('tbl_users');
			redirect('/users');
    

	}


	public function delete($id = null){
		$id = $_POST['id'];

		$this->db->where('id', $id)->delete('tbl_users');
		redirect('/users');

	}





}
