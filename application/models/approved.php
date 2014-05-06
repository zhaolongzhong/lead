<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Approved extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$firstname = $this->session->userdata('firstname');
		$data['firstname'] = $firstname;
        $this->load->model('time_model');
		$query = $this->time_model->get_request();
		$data['query'] = $query->result();
		$uniqueuser = $this->time_model->select_distinct_user();
		$data['uniqueuser'] = $uniqueuser->result();
		
		$thisweek = $this->time_model->select_thisweek($monday,$sunday);
		$data['thisweek'] = $thisweek->result();
		
		//$ = date('Y-m-d',strtotime('last day of this month'));
		$lastsunday = date('Y-m-d',strtotime('last sunday'));
		$nextmonday = date('Y-m-d',strtotime('next monday'));
		$monday = date('Y-m-d',strtotime('this monday'));
		$tuesday = date('Y-m-d',strtotime('this tuesday'));
		$wednesday = date('Y-m-d',strtotime('this wednesday'));
		$thursday = date('Y-m-d',strtotime('this thursday'));
		$friday = date('Y-m-d',strtotime('this friday'));
		$saturday = date('Y-m-d',strtotime('this saturday'));
		$sunday = date('Y-m-d',strtotime('this sunday'));
		

		$userinfo = $this->time_model->select_userid();
		$data['userinfo'] = $userinfo->result();


		foreach($uniqueuser->result() as $row)
		{
			$date = 60;
			foreach($userinfo->result() as $user)
			{
				if($row->uid==$user->uid)
				{
					$username =  $user->username;
					$xp = explode(":", $user->hoursworked);

					$date= $date+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
				}
			}

			$stack[] = array($row->uid,$username,round($date/3600,1));
		}




		$data['stack'] = $stack;
		$data['date'] = $date;







		$this->load->view('approved_view', $data);
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