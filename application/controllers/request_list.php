<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Request_list extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
        $this->load->model('time_model');
		$query = $this->time_model->get_request();
		$data['query'] = $query->result();
		$this->load->view('request_list_view', $data);
	}

	function approve()
	{

		$timesheetid = $this->input->get('timesheetid',true);
        $adminid = $this->session->userdata('uid');
			
        $data = array(
                    'approvedbyadmin' => $adminid,
                    );

        $this->load->model('time_model');
        $this->time_model->approved($timesheetid,$data);

		$msg = 'Update successully!';
		$this->index();
	}
}