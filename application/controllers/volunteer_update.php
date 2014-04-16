<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Volunteer_update extends CI_Controller {

	public function index($msg = NULL)
	{
		// $vid = $_GET["vid"];
		$username = $this->input->get('username',true);

		$data['msg'] = $msg;
        $this->load->model('volunteer_model');
		$query = $this->volunteer_model->select($username);
		$data['query'] = $query->result();
		$this->load->view('volunteer_update_view', $data);
	}

	function update()
	{

		$username = $this->input->get('username',true);
        $username 			 = $_POST['username'];
    	$age 			 = $_POST['age'];
    	$fname 			 = $_POST['fname'];
    	$lname 			 = $_POST['lname'];
    	$activevolunteer = $_POST['activevolunteer'];
    	$approved 		 = $_POST['approved'];
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
        $this->volunteer_model->update($data,$username);

		$msg = 'Update successully!';
		redirect('volunteer');
	}
}