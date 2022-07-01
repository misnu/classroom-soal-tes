<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/*
| -------------------------------------------------------------------------
| misnu88@gmail.com
| -------------------------------------------------------------------------
*/

	public function index()
	{
		
		$this->load->view('login');
	}


	public function cek()
	{
		$data = array(
			'username' => $_POST['username'], 
			'password' => md5($_POST['password']),
			
		);

		$sql = 	$this->db->where($data)->get("t_login")->row();

		if(!empty($sql)){
			$data_session =  array(

				'username' => $sql->username
				
			);
		
	
			  $this->session->set_userdata($data_session);
		
			$message = "anggota";
		}else{

			$data_session = array(
				'error' => 'error',
			);

			$this->session->set_userdata($data_session);
			$message = "/";
		}
	
		 redirect($message);
	}

	public function logout(){

		$this->session->sess_destroy();

		redirect('/');
	}


}
