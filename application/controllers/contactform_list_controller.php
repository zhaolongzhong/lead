<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactform_list_controller extends CI_Controller {

	public function index($msg = NULL)
	{
		
		$this->load->model('contact_model');
		$query = $this->contact_model->get_all_contactform();
		
		$data['query'] = $query->result();
		
		$data['msg'] = $msg;
		$this->load->view('contactform_list_view', $data);
	}

	
}