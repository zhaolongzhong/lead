<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_Admin extends CI_Controller {

	public function index()
	{
		$role = $this->session->userdata('role');
		$data['role'] = $role;
		$firstname = $this->session->userdata('firstname');
		$data['firstname'] = $firstname;
		$this->load->view('home_admin',$data);
	}
}