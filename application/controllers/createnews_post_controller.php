<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Createnews_post_controller extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$firstname = $this->session->userdata('firstname');
		$data['firstname'] = $firstname;
		$this->load->view('createnewspost_view', $data);
	}

	function insert()
	{
	$uid 			 = $this->session->userdata('uid');
    	$title 			 = $_POST['title'];
    	$message		 = $_POST['message'];
    	$isprivate		 = $_POST['isprivate'];

			
        $data = array(
                    'uid' => $uid,
                    'title' => $title,
                    'message' => $message,
                    'isprivate' => $isprivate
                    );

        $this->load->model('newspost_model');
        $this->newspost_model->insert($data);

		$msg = 'Add successully!';
		$this->index($msg);
	}
}