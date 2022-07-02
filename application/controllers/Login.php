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

				'username' => $sql->username,
				'id_pendaftar' =>$sql->id_pendaftar
				
			);
			  $this->session->set_userdata($data_session);

			  if(empty($sql->id_pendaftar)){
				$message = "anggota";
			  }else{
				if($sql->status =='1'){
					$data_session = array(
						'error' => 'Menunggu verifikasi admin',
					);
		
					$this->session->set_userdata($data_session);
					$message = "/";
				}else{
					$message = "pendaftar/info";
				}
				
			  }
		
			
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

		redirect('/login');
	}


}
