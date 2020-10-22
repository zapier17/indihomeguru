<?php

class User_model extends CI_Model
{
    private $_table = "users";

    public function doLogin(){
		$post = $this->input->post();
        //Username: Upoint
        //Password: 123

        $this->db->where('username', $post["username"]);
        $user = $this->db->get($this->_table)->row();

        if($user){
            $isPasswordTrue = password_verify($post["password"], $user->password);

            if($isPasswordTrue){ 
                $this->session->set_userdata(['user_logged' => $user]);
                return true;
            }
        }

		return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }
}