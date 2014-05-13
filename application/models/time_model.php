<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Time_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function get_request(){
        $query = $this->db->get('TimeSheetApproved');
        return $query;
    }

    function request($data)
    {
    	$this->db->insert('TimeSheetRequests',$data);
    	$this->db->insert('TimeSheetApproved',$data);
    }
    function approved($timesheetid,$data)
    {
        $this->db->where('timesheetid', $timesheetid);
        $this->db->update('TimeSheetApproved', $data);
    }
    function select($timesheetid)
    {
        $query = $this->db->get_where('TimeSheetApproved', array('timesheetid' =>$timesheetid));
        return $query;
    }
    function insert_schedule($data)
    {
        $this->db->insert('Schedule',$data);
    }
    function select_schedule(){
        $this->db->order_by("username","asc");  
        $query = $this->db->get('Schedule');
        return $query;
    }
    function delete_schedule($sid)
    {
        $this->db->where('sid',$sid);
        $this->db->delete('Schedule');
    }
    function select_schedule_by_username($username)
    {
        $this->db->order_by("username","asc"); 
        $query = $this->db->get_where('Schedule', array('username' =>$username));
        return $query;

    }
    function select_userid()
    {
        $this->db->select('*');
        $this->db->from('Users');
        $this->db->join('TimeSheetApproved', 'TimeSheetApproved.uid = Users.uid','left');
        $query = $this->db->get();
        return $query;
    }
	
	function select_thisweek($thismonday,$thissunday)
	{
		//$sql = "SELECT * FROM TimeSheetApproved T WHERE T.startime >=". $lastsunday." AND T.endtime <= ".$nextmonday;
		//$sql = "select distinct(uid) from TimeSheetApproved";
        //$query = $this->db->query($sql);
        

        $this->db->select('*')->select('TimeSheetApproved.uid')->from('TimeSheetApproved')
                ->join('Users', 'Users.uid = TimeSheetApproved.uid', 'LEFT')
                ->join('Volunteers', 'Volunteers.username = Users.username', 'LEFT');
                $query = $this->db->get();


		// $this->db->select('*');
		// $this->db->from('Users');
		// $this->db->join('TimeSheetApproved', 'TimeSheetApproved.uid = Users.uid','left');
		// $this->db->where('starttime >=', $thismonday);
		// $this->db->where('endtime <=', $thissunday);
		// //$this->db->where('starttime >=', '2014-05-05 00:00:00');
		// //$this->db->where('endtime <=', '2014-05-11 23:59:59');
		// $query = $this->db->get();
		return $query;
	}
    function select_distinct_user()
    {
        $sql = "select distinct(uid) from TimeSheetApproved";
        $query = $this->db->query($sql);

        // $query = $this->db->get('TimeSheetApproved');
        return $query;
    }
}