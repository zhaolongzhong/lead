<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mission extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->view('mission_view', $data);
	}
}