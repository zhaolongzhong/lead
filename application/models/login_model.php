<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function validate(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        // $pawprint = $_POST['pawprint'];
        // $password = $_POST['password'];
        // Prep the query
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        
        // Run the query
        $query = $this->db->get('Users');
        // Let's check if there are any results
        
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $this->load->model('volunteer_model');
            $query = $this->volunteer_model->select($username);
            foreach ($query->result() as $row2) {
                $firstname = $row2->fname;
            }
            if($row->role == 0){
                $data=array(
                    'role' => "user",
                    'uid' => $row->uid,
                    'username' => $row->username,
                    'firstname' => $firstname,
                    'validate' => true);
            }elseif ($row->role == 1) {
                $data=array(
                    'role' => "admin",
                    'uid' => $row->uid,
                    'username' => $row->username,
                    'firstname' => $firstname,
                    'validate' => true);
            }elseif ($row->role == 2) {
                $data=array(
                    'role' => "superadmin",
                    'uid' => $row->uid,
                    'username' => $row->username,
                    'firstname' => $firstname,
                    'validate' => true);
            }

            $this->session->set_userdata($data);
            return true;
        }

        return false;
    }

    public function get_all_user_info(){
        $query = $this->db->get('Users');
        return $query;
    }
    function delete($uid)
    {
        $this->db->where('uid','1');
        $this->db->delete('Users');
    }
}
?>