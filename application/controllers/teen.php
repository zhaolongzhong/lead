<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teen extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->view('teen_view', $data);
	}
}