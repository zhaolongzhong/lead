<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Time_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function get_request(){
        $query = $this->db->get('TimeSheetApproved');
        return $query;
    }

    function request($data){
    	$this->db->insert('TimeSheetRequests',$data);
    	$this->db->insert('TimeSheetApproved',$data);
    }
    function approved($timesheetid,$data){
        $this->db->where('timesheetid', $timesheetid);
        $this->db->update('TimeSheetApproved', $data);
    }
    function select($timesheetid){
        $query = $this->db->get_where('TimeSheetApproved', array('timesheetid' =>$timesheetid));
        return $query;
    }
    }
}