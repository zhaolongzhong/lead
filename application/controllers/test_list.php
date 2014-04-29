<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_list extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$firstname = $this->session->userdata('firstname');
		$data['firstname'] = $firstname;
		$this->load->model('quiz_model');
		$query = $this->quiz_model->get_quiz_table();
		
		$data['query'] = $query->result();

		$this->load->view('test_list_view', $data);
	}
}
?>