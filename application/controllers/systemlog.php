<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SystemLog extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->model('systemlog_model');
		$query = $this->systemlog_model->get_all_Systemlog();
		
		$data['query'] = $query->result();

		$this->load->view('systemlog_view', $data);
	}


	public function do_logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}