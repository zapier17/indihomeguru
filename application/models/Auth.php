<?php 
class Auth extends CI_Model 
{
    
    public function __construct()
    {
        parent::__construct();
    }
 
    function register($username,$password,$email)
    {
        $data_user = array(
            'username'=>$username,
            'password'=>password_hash($password,PASSWORD_DEFAULT),
            'email'=>$email
        );
        $this->db->insert('users',$data_user);
    }
}
?>