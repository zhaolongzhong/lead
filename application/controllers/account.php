<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public function index($msg = NULL)
	{

		$data['msg'] = $msg;
		$this->load->model('login_model');
		$query = $this->login_model->get_all_user_info();

		$data['query'] = $query->result();

		$this->load->view('account_view', $data);
	}
	function delete()
	{
		$uid = $this->input->get('uid',true);
		$this->load->model('login_model');
        $this->login_model->delete($uid);
        $this->index();
	}
}