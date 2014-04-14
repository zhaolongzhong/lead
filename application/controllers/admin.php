<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->model('admin_model');
		$query = $this->admin_model->get_all_admins();
		
		$data['query'] = $query->result();

		$this->load->view('admin_view', $data);
	}


	public function do_logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}