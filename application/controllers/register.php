<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->view('register_view', $data);
	}

	function process()
	{
		$this->load->model('register_model');
		$result = $this->register_model->register();
		if(!$result){
			$msg = '<font color=red>Register failed. This username has already been registered.</font><br />';
			$this->index($msg);
		}else{
			redirect('home');
		}
	}
}