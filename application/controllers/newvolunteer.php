<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newvolunteer extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->view('newvolunteer_view', $data);
	}

	function insert()
	{
		$this->load->model('newvolunteer_model');
		$query = $this->newvolunteer_model->insert();

		if($query){
			$msg = 'Add successully!';
			$this->index($msg);
		}else{
			$msg = 'Add failed!';
			$this->index($msg);
		}	
	}
}