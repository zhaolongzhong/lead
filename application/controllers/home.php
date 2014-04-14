<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$login= $this->session->userdata('validated');
		if($login){
			$this->load->view('home_view');
		}
		else{
			redirect('login');
		}
	}
}