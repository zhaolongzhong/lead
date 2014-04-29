<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Request extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->view('request_view', $data);
	}

	function insert()
	{
		$uid = $this->session->userdata('uid');
        // $uid 	   = $_POST['uid'];
    	$starttime = $_POST['starttime'];
    	$endtime   = $_POST['endtime'];
	$date	   = $_POST['date'];
    	$comments  = $_POST['comments'];
			
        $data = array(
                    'uid'       => $uid,
                    'starttime' => $starttime,
                    'endtime'   => $endtime,
		    'date'	=> $date,
                    'comments'  => $comments
                    );

        $this->load->model('time_model');
        $this->time_model->request($data);

		$msg = 'Request successully! Please wait for a few days for approval.';
		$this->index($msg);
	}
}