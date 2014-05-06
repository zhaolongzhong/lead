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
		
		$monday    = date('Y-m-d',strtotime('monday this week'));
		$sunday    = date('Y-m-d',strtotime('sunday this week'));

		/*
			thisweek contains all the workhours in current week.
		*/
		$thismonday = $monday. " 00:00:00";
		$thissunday = $sunday. " 23:59:59";
		$thisweek = $this->time_model->select_thisweek($thismonday,$thissunday);
		$data['thisweek'] = $thisweek->result();
		
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

		/*call weekhours funciton, 
		return user's work hours each day in current week.*/
		$week = $this->weekhours($uniqueuser,$userinfo);
		$data['week'] = $week;
		
		$this->load->view('approved_view', $data);
	}

	function weekhours($uniqueuser,$userinfo)
	{
		$monday    = date('Y-m-d',strtotime('monday this week'));
		$tuesday   = date('Y-m-d',strtotime('tuesday this week'));
		$wednesday = date('Y-m-d',strtotime('wednesday this week'));
		$thursday  = date('Y-m-d',strtotime('thursday this week'));
		$friday    = date('Y-m-d',strtotime('friday this week'));
		$saturday  = date('Y-m-d',strtotime('saturday this week'));
		$sunday    = date('Y-m-d',strtotime('sunday this week'));

		foreach($uniqueuser->result() as $row)
		{
			$second1 = 60;
			$second2 = 60;
			$second3 = 60;
			$second4 = 60;
			$second5 = 60;
			$second6 = 60;
			$second7 = 60;
			foreach($userinfo->result() as $user)
			{
				if($row->uid==$user->uid)
				{
					$username =  $user->username;
					if($monday == date("Y-m-d",strtotime($user->starttime))){
						$xp = explode(":", $user->hoursworked);
						$second1= $second1+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
					}
					if($tuesday == date("Y-m-d",strtotime($user->starttime))){
						$xp = explode(":", $user->hoursworked);
						$second2= $second2+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
					}
					if($wednesday == date("Y-m-d",strtotime($user->starttime))){
						$xp = explode(":", $user->hoursworked);
						$second3= $second3+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
					}
					if($thursday == date("Y-m-d",strtotime($user->starttime))){
						$xp = explode(":", $user->hoursworked);
						$second4= $second4+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
					}
					if($friday == date("Y-m-d",strtotime($user->starttime))){
						$xp = explode(":", $user->hoursworked);
						$second5= $second5+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
					}
					if($saturday == date("Y-m-d",strtotime($user->starttime))){
						$xp = explode(":", $user->hoursworked);
						$second6= $second6+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
					}
					if($sunday == date("Y-m-d",strtotime($user->starttime))){
						$xp = explode(":", $user->hoursworked);
						$second7= $second7+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
					}
				}
			}

			$mondayarray[]    = array($row->uid,$username,round($second1/3600,1));
			$tuesdayarray[]	  = array($row->uid,$username,round($second2/3600,1));
			$wednesdayarray[] = array($row->uid,$username,round($second3/3600,1));
			$thursdayarray[]  = array($row->uid,$username,round($second4/3600,1));
			$fridayarray[]    = array($row->uid,$username,round($second5/3600,1));
			$saturdayarray[]  = array($row->uid,$username,round($second6/3600,1));
			$sundayarray[]    = array($row->uid,$username,round($second7/3600,1));
		}
		$week = array("MON"=>$mondayarray,"TUE"=>$tuesdayarray,"WED"=>$wednesdayarray,"THU"=>$thursdayarray,"FRI"=>$fridayarray,"SAT"=>$saturdayarray,"SUN"=>$sundayarray);
		return $week;
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

		// $msg = 'Update successully!';
		// $this->index();
		redirect('approved');
	}
}