<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Volunteer extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$firstname = $this->session->userdata('firstname');
		$data['firstname'] = $firstname;
		$this->load->model('volunteer_model');
		$query = $this->volunteer_model->get_all_volunteers();
		
		$data['query'] = $query->result();

		$this->load->view('volunteer_view', $data);
	}

	function delete()
	{
		$id = $this->uri->segment(3);
		$this->load->model('volunteer_model');
        $this->volunteer_model->delete($id);
        $this->index();
	}
	public function do_logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}