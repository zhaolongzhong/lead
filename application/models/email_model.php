<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function get_all_contacts(){
        $query = $this->db->get('Email');
        return $query;
    }

    function insert($data)
    {
        $this->db->insert('Email',$data);
    }


}
?>