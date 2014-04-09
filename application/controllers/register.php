<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	// public function index($msg = NULL)
	// {
	// 	$data['msg'] = $msg;
	// 	$this->load->view('register_view',$data);
	// }

	// function register()
	// {
	// 	// $this->load->database();
	// 	// $this->load->model('register_model');
	// 	// $result = $this->login_model->register();
	// 	// if(!$result){
	// 	// 	$msg = '<font color=red>Register failed.</font><br />';
	// 	// 	$this->index($msg);
	// 	// }else{
	// 	// 	redirect('welcome_view');
	// 	// }
	// 	// redirect('welcome_view');
	// }

	// public function do_logout(){
 //        $this->session->sess_destroy();
 //        redirect('login');
 //    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($msg = NULL)
	{
		// $this->load->view('login');
		$data['msg'] = $msg;
		$this->load->view('register_view', $data);
	}

	function process()
	{
		$this->load->model('register_model');
		$result = $this->register_model->register();
		if(!$result){
			$msg = '<font color=red>Register failed.</font><br />';
			$this->index($msg);
		}else{
			redirect('home');
		}
	}
}