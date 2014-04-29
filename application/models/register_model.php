<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Register_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function register(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        $role = '0';
        
        $sql = "INSERT INTO Users(username, password,role) 
        VALUES (".$this->db->escape($username).", ".$this->db->escape($password).",".$this->db->escape($role).")";

        if($this->db->query($sql)==1){


        // if($this->db->affected_rows() != -1)
        // {
        //     // If there is a user, then create session data
            $data = array(
                    'username' =>$username,
                    'login' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }
}
?>