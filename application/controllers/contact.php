<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->view('contact_view', $data);
	}

	function insert()
	{
		// $timesheetid = $this->input->get('timesheetid',true);
        // $adminid = $this->session->userdata('uid');
			
        $name 	 = $_POST['name'];
        $email   = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        $data = array(
                    'name'    => $name,
                    'email'   => $email,
                    'subject' => $subject,
                    'message' => $message
                    );

        $this->load->model('contact_model');
        $this->contact_model->insert($data);

		$msg = 'Send message successully!';
		$this->index($msg);
	}
}