<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Analytic_controller extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->view('analytic_view', $data);
	}
	
	
	function get_hours()
	{
		
		
		$this->load->model('time_model');
		$query = $this->time_model->get_request();
		//$data['query'] = $query->result();
		
		
	}
	

	function insert()
	{
	$uid 			 = $this->session->userdata('uid');
    	$title 			 = $_POST['title'];
    	$message		 = $_POST['message'];
        //$date   		 = $_POST['date'];
    	$isprivate		 = $_POST['isprivate'];

			
        $data = array(
                    'uid' => $uid,
                    'title' => $title,
                    'message' => $message,
                    'date' => 'NOW()',
                    'isprivate' => $isprivate
                    );

        $this->load->model('newspost_model');
        $this->newspost_model->insert($data);

		$msg = 'Add successully!';
		$this->index($msg);
	}
}