<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
        $firstname = $this->session->userdata('firstname');
        $data['firstname'] = $firstname;
		$this->load->view('email_view', $data);
	}

	function insert()
	{

        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        $data = array(
                    'subject' => $subject,
                    'message' => $message
                    );

        $this->load->model('email_model');
        $this->contact_model->insert_message($data);

		$msg = 'Send message successully!';
		$this->index($msg);
	}
}