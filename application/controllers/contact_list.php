<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_list extends CI_Controller {

	public function index($msg = NULL)
	{
		
		$this->load->model('contact_model');
		$query = $this->contact_model->get_all_contactform();
		
		$data['query'] = $query->result();
		
		$data['msg'] = $msg;
		$this->load->view('contact_list_view', $data);
	}

	
}