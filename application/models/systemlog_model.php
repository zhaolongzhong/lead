<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Systemlog_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function get_all_Systemlog(){
        $query = $this->db->get('SystemLog');
        return $query;
    }

    // function select($logid)
    // {
    //     $query = $this->db->get_where('SystemLog', array('logid' =>$logid));
    //     return $query;
    // }
}
?>