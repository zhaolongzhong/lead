<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('newspost_model');
		$query = $this->newspost_model->get_all_newsposts();
		$data['query'] = $query->result();

		$this->load->view('home', $data);
	}
}