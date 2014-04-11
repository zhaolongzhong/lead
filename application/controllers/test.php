<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;//
		$this->load->model('test_model');
		$query = $this->test_model->get_all_user_info();
		
		$data['query'] = $query->result();

		$this->load->view('test_view', $data);
	}
}
