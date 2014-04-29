<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->model('login_model');
		$query = $this->login_model->get_all_user_info();
		
		$data['query'] = $query->result();

		$this->load->view('login_view', $data);
	}

	function process()
	{
		$this->load->model('login_model');
		$result = $this->login_model->validate();
		if(!$result){
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
			$this->index($msg);
		}else{
			$role = $this->session->userdata('role');
			if($role == 'user')
			{
				redirect('home_user');
			}elseif($role == 'admin')
			{
				redirect('home_admin');
			}elseif($role == 'superadmin'){
				redirect('superadmin');
			}else{
				redirect('login');
			}
		}
	}

	public function do_logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
