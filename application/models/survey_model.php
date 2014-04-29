<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Survey_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function get_all_surveys(){
        $query = $this->db->get('Survey');
        return $query;
    }

    function insert($data)
    {
        $this->db->insert('Survey',$data);
    }
    
    function get_all_surveyresults()
    {
         $query = $this->db->get('Survey');
        return $query;
    }

}
?>