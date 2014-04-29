<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Esl extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->view('esl_view', $data);
	}
}