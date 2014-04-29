<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newvolunteer extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->view('newvolunteer_view', $data);
	}

	function insert()
	{
		$username 	     = $_POST['email'];
    	$age 			 = $_POST['age'];
    	$fname 			 = $_POST['fname'];
    	$lname 			 = $_POST['lname'];
    	$activevolunteer = $_POST['activevolunteer'];
    	$approved 	     = $_POST['approved'];
    	$streetaddress   = $_POST['streetaddress'];
    	$city 		     = $_POST['city'];
    	$statecode       = $_POST['statecode'];
    	$primaryphone    = $_POST['primaryphone'];
    	$altphone 	     = $_POST['altphone'];
			
        $data = array(
                    'username' => $username,
                    'age' => $age,
                    'fname' => $fname,
                    'lname' =>$lname,
                    'activevolunteer' => $activevolunteer,
                    'approved' => $approved,
                    'streetaddress' => $streetaddress,
                    'city' => $city,
                    'statecode' => $statecode,
                    'primaryphone' => $primaryphone,
                    'altphone' => $altphone
                    );

        $this->load->model('volunteer_model');
        $this->volunteer_model->insert($data);

		$msg = 'Add successully!';
		$this->index($msg);
	}
}