<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Schedule_user extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
    $firstname = $this->session->userdata('firstname');
    $data['firstname'] = $firstname;
		$this->load->view('schedule_user_view', $data);
	}

	function insert()
	{
		// // $timesheetid = $this->input->get('timesheetid',true);
  //       // $adminid = $this->session->userdata('uid');
			
  //       $name 	 = $_POST['name'];
  //       $email   = $_POST['email'];
  //       $subject = $_POST['subject'];
  //       $message = $_POST['message'];
        
  //       $data = array(
  //                   'name'    => $name,
  //                   'email'   => $email,
  //                   'subject' => $subject,
  //                   'message' => $message
  //                   );

  //       $this->load->model('contact_model');
  //       $this->contact_model->insert_message($data);

		// $msg = 'Send message successully!';
		// $this->index($msg);
	}
}