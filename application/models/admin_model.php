<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function get_all_Admins(){
        $query = $this->db->get('Admins');
        return $query;
    }

    // function select($logid)
    // {
    //     $query = $this->db->get_where('SystemLog', array('logid' =>$logid));
    //     return $query;
    // }
}
?>