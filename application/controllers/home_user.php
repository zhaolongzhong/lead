<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_User extends CI_Controller {

	public function index()
	{
		
		$role = $this->session->userdata('role');
		$username = $this->session->userdata('username');
		$firstname = $this->session->userdata('firstname');
		$data['firstname'] = $firstname;
		$data['role'] = $role;
		$data['username'] = $username;
		$this->load->view('home_user',$data);
	}
}