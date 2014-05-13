<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_stats_user extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$firstname = $this->session->userdata('firstname');
		$data['firstname'] = $firstname;
		$data['msg'] = $msg;
		$username = $this->session->userdata('username');
		$data['username'] = $username;
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
		$week  = $this->weekhours($uniqueuser,$userinfo);
		foreach ($week as $key=> $value){
			if($key == $username){
				$week=$value;
				// foreach($value as $key2 => $value2){
				// 	$week=$value2;
				// }
			}
		}
		$month = $this->monthhours($uniqueuser,$userinfo);
		foreach ($month as $key=> $value){
			if($key == $username){
				foreach($value as $key2 => $value2){
					$month=$value2;
				}
			}
		}

		$data['week'] = $week;
		$data['month'] = $month;
		$this->load->view('user_stats_user_view', $data);
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
        $week = array();

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
                    
					$username =  $user->username;
			
                    $week += array($username => "[". round($second1/3600,1) . ",". round($second2/3600,1)  . ",". round($second3/3600,1)  . ",". round($second4/3600,1)  . ",". round($second5/3600,1)  . ",". round($second6/3600,1)  . ",". round($second7/3600,1) ."]");

				}
			}

			$mondayarray[]    = array($row->uid,$username,round($second1/3600,1));
			$tuesdayarray[]	  = array($row->uid,$username,round($second2/3600,1));
			$wednesdayarray[] = array($row->uid,$username,round($second3/3600,1));
			$thursdayarray[]  = array($row->uid,$username,round($second4/3600,1));
			$fridayarray[]    = array($row->uid,$username,round($second5/3600,1));
			$saturdayarray[]  = array($row->uid,$username,round($second6/3600,1));
			$sundayarray[]    = array($row->uid,$username,round($second7/3600,1));

			$userarray[]      = array($row->uid,$username,round($second7/3600,1));
            
		}
        // $week = array("MON"=>$mondayarray,"TUE"=>$tuesdayarray,"WED"=>$wednesdayarray,"THU"=>$thursdayarray,"FRI"=>$fridayarray,"SAT"=>$saturdayarray,"SUN"=>$sundayarray);

        // {
  //           name: 'John',
  //           data: [5, 3, 4, 7, 2]
  //       }, {
  //           name: 'Jane',
  //           data: [2, 2, 3, 2, 1]
  //       }, {
  //           name: 'Joe',
  //           data: [3, 4, 4, 2, 5]
  //       }


  //$week = array("joe" => "[3, 4, 4, 2, 5]");
  //$week += array("joe2" => "[3, 4, 4, 2, 5]");

        //$week = $userarray;
		return $week;
	}

	function monthhours($uniqueuser,$userinfo)
	{
		$january   = date('Y-m',strtotime('january this year'));
		$february  = date('Y-m',strtotime('february this year'));
		$march     = date('Y-m',strtotime('march this year'));
		$april     = date('Y-m',strtotime('april this year'));
		$may       = date('Y-m',strtotime('may this year'));
		$june      = date('Y-m',strtotime('june this year'));
		$july      = date('Y-m',strtotime('july this year'));
		$august    = date('Y-m',strtotime('august this year'));
		$septemper = date('Y-m',strtotime('septemper this year'));
		$october   = date('Y-m',strtotime('october this year'));
		$november  = date('Y-m',strtotime('november this year'));
		$december  = date('Y-m',strtotime('december this year'));

        $month = array();

		foreach($uniqueuser->result() as $row)
		{
			$second1 = 60;
			$second2 = 60;
			$second3 = 60;
			$second4 = 60;
			$second5 = 60;
			$second6 = 60;
			$second7 = 60;
			$second8 = 60;
			$second9 = 60;
			$second10 = 60;
			$second11 = 60;
			$second12 = 60;
			foreach($userinfo->result() as $user)
			{
				if($row->uid==$user->uid)
				{
					$username =  $user->username;
					if($january == date("Y-m",strtotime($user->starttime))){
						$xp = explode(":", $user->hoursworked);
						$second1= $second1+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
					}
					if($february == date("Y-m",strtotime($user->starttime))){
						$xp = explode(":", $user->hoursworked);
						$second2= $second2+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
					}
					if($march == date("Y-m",strtotime($user->starttime))){
						$xp = explode(":", $user->hoursworked);
						$second3= $second3+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
						// if("BenErnst@NeverGoingToGetAJob.com" == $username){
						// 	$month []= array($username => $second3);
						// }
					}
					if($april == date("Y-m",strtotime($user->starttime))){
						$xp = explode(":", $user->hoursworked);
						$second4= $second4+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
					}
					if($may == date("Y-m",strtotime($user->starttime))){
						$xp = explode(":", $user->hoursworked);
						$second5= $second5+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
					}
					if($june == date("Y-m",strtotime($user->starttime))){
						$xp = explode(":", $user->hoursworked);
						$second6= $second6+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
					}
					if($july == date("Y-m",strtotime($user->starttime))){
						$xp = explode(":", $user->hoursworked);
						$second7= $second7+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
					}
					if($august == date("Y-m",strtotime($user->starttime))){
						$xp = explode(":", $user->hoursworked);
						$second8= $second8+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
					}
					if($septemper == date("Y-m",strtotime($user->starttime))){
						$xp = explode(":", $user->hoursworked);
						$second9= $second9+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
					}
					if($october == date("Y-m",strtotime($user->starttime))){
						$xp = explode(":", $user->hoursworked);
						$second10= $second10+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
					}
					if($november == date("Y-m",strtotime($user->starttime))){
						$xp = explode(":", $user->hoursworked);
						$second11= $second11+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
					}
					if($december == date("Y-m",strtotime($user->starttime))){
						$xp = explode(":", $user->hoursworked);
						$second12= $second12+ (int)$xp[0] * 60*60 + (int)$xp[1]*60 + (int)$xp[2];
					}

					$username =  $user->username;

                   	// $month[] = array($username => "[". round($second1/3600,1) . ",". round($second2/3600,1)  . ",". round($second3/3600,1)  . ",". round($second4/3600,1)  . ",". round($second5/3600,1)  . ",". round($second6/3600,1)  . ",". round($second7/3600,1) . ",". round($second8/3600,1). ",". round($second9/3600,1). ",". round($second10/3600,1). ",". round($second11/3600,1). ",". round($second12/3600,1)."]");
				}
				// $username =  $user->username;
				// $month[] = array($username => "[". round($second1/3600,1) . ",". round($second2/3600,1)  . ",". round($second3/3600,1)  . ",". round($second4/3600,1)  . ",". round($second5/3600,1)  . ",". round($second6/3600,1)  . ",". round($second7/3600,1) . ",". round($second8/3600,1). ",". round($second9/3600,1). ",". round($second10/3600,1). ",". round($second11/3600,1). ",". round($second12/3600,1)."]");
				
			}

			$januaryarray[]   = array($row->uid,$username,round($second1/3600,1));
			$februaryarray[]  = array($row->uid,$username,round($second2/3600,1));
			$marcharray[]     = array($row->uid,$username,round($second3/3600,1));
			$aprilarray[]     = array($row->uid,$username,round($second4/3600,1));
			$mayarray[]       = array($row->uid,$username,round($second5/3600,1));
			$junearray[]      = array($row->uid,$username,round($second6/3600,1));
			$julyarray[]      = array($row->uid,$username,round($second7/3600,1));
			$augustarray[]    = array($row->uid,$username,round($second8/3600,1));
			$septemperarray[] = array($row->uid,$username,round($second9/3600,1));
			$octoberarray[]   = array($row->uid,$username,round($second10/3600,1));
			$novemberarray[]  = array($row->uid,$username,round($second11/3600,1));
			$decemberarray[]  = array($row->uid,$username,round($second12/3600,1));
			$month[] = array($username => "[". round($second1/3600,1) . ",". round($second2/3600,1)  . ",". round($second3/3600,1)  . ",". round($second4/3600,1)  . ",". round($second5/3600,1)  . ",". round($second6/3600,1)  . ",". round($second7/3600,1) . ",". round($second8/3600,1). ",". round($second9/3600,1). ",". round($second10/3600,1). ",". round($second11/3600,1). ",". round($second12/3600,1)."]");
            
		}

		return $month;
	}
}