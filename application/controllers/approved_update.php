<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class approved_update extends CI_Controller {

	public function index($msg = NULL)
	{
		$timesheetid = $this->input->get('timesheetid',true);

		$data['msg'] = $msg;
        $this->load->model('time_model');
		$query = $this->time_model->select($timesheetid);
		$data['query'] = $query->result();
		$this->load->view('approved_update_view', $data);
	}

	function update()
	{

		$timesheetid = $this->input->get('timesheetid',true);
    	// $uid 			 = $_POST['uid'];
    	$starttime	 = $_POST['starttime'];
        $endtime   = $_POST['endtime'];
    	// $hourseworked= $_POST['hourseworked'];
        // $approvedbyadmin = $_POST['approvedbyadmin'];
        $comments = $_POST['comments'];

			
        $data = array(
                    'starttime' => $starttime,
                    'endtime' => $endtime,
                    // 'hoursworked' => $hoursworked,
                    // 'approvedbyadmin' =>$approvedbyadmin,
                    'comments' => $comments,
                    );

        $this->load->model('time_model');
        $this->time_model->approved($timesheetid,$data);

		$msg = 'Update successully!';
		// redirect('approved');
        $this->index($msg);
	}
}