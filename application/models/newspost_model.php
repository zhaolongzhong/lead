<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class newspost_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function get_all_newsposts(){
        $query = $this->db->get('NewsPosts');
        return $query;
    }

    function insert($data)
    {
        $this->db->set('date','NOW()',FALSE);
        $this->db->insert('NewsPosts',$data);
    }

}
?>