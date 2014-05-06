<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Schedule_user extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
    $this->load->model('time_model');
    $username = $this->session->userdata('username');

    $query = $this->time_model->select_schedule_by_username($username);
    $data['query'] = $query->result();
		$this->load->view('schedule_user_view', $data);
	}

  function insert()
  {
    // $timesheetid = $this->input->get('timesheetid',true);
    // $adminid = $this->session->userdata('uid');    
    $username = $this->session->userdata('username');
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