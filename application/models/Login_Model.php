<?php

// $table = 'tbl_atlet';    
class Login_Model extends CI_Model{


    public function cek($username , $password ){

        $sql = $this->db->where('username', $username)
                        ->where('password', MD5($password))
                        ->where('type', '3')
                        ->get('tbl_users');
       
        return $sql->result_array();
    }

    


}