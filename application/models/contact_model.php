<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function get_all_contacts(){
        $query = $this->db->get('Contact');
        return $query;
    }
    
    function get_all_contactform(){
        $query = $this->db->get('Contact');
        return $query;
    }

    function insert($data)
    {
        $this->db->insert('Contact',$data);
    }


}
?>