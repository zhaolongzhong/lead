<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Schedule extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;

    $this->load->model('time_model');
    $query = $this->time_model->select_schedule();
    $data['query'] = $query->result();
		$this->load->view('schedule_view', $data);
	}

	function insert()
	{
		// $timesheetid = $this->input->get('timesheetid',true);
    // $adminid = $this->session->userdata('uid');		
    $username  = $_POST['username'];
    $date      = $_POST['date'];
    $starttime = $_POST['starttime'];
    $endtime   = $_POST['endtime'];
    
    $data = array(
                'username'  => $username,
                'date'      => $date,
                'starttime' => $starttime,
                'endtime'   => $endtime
                );

    $this->load->model('time_model');
    $this->time_model->insert_schedule($data);
		$this->index();
	}
  function delete()
  {
    $sid = $this->input->get('sid',true);  
    $this->load->model('time_model');
    $this->time_model->delete_schedule($sid);
    $this->index();
  }
}