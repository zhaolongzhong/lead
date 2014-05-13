<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Request extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$username = $this->session->userdata('username');
		$this->load->model('volunteer_model');
		$query = $this->volunteer_model->select($username);
		$approved = 0;
		foreach($query->result() as $row){
			$approved = $row->approved;
		}
		if($approved == 0){
			$this->load->view('request_fail_view', $data);
		}else{
			$this->load->view('request_view', $data);
		}
	}

	function insert()
	{
		$uid = $this->session->userdata('uid');
    	$starttime = $_POST['starttime'];
    	$endtime   = $_POST['endtime'];
    	$comments  = $_POST['comments'];
			
        $data = array(
                    'uid'       => $uid,
                    'starttime' => $starttime,
                    'endtime'   => $endtime,
                    'comments'  => $comments
                    );

        $this->load->model('time_model');
        $this->time_model->request($data);

		$msg = 'Request successully! Please wait for a few days for approval.';
		$this->index($msg);
	}
}