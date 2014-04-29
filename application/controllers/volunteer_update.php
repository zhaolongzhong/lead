<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Volunteer_update extends CI_Controller {

	public function index($msg = NULL)
	{
		// $vid = $_GET["vid"];
		// $username = $this->input->get('username',true);
        $username = $this->session->userdata('username');
        $firstname = $this->session->userdata('firstname');
        $data['firstname'] = $firstname;
		$data['msg'] = $username;
        $this->load->model('volunteer_model');
		$query = $this->volunteer_model->select($username);
		$data['query'] = $query->result();
        $users = $this->volunteer_model->select_user($username);
        $data['users'] = $users->result();
		$this->load->view('volunteer_update_view', $data);
	}

	function update()
	{

		$username = $this->input->get('username',true);
        $username 		 = $_POST['username'];
        $password        = $_POST['password'];
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

        $data_user = array(
                    'password' => $password,
                    'firstname' => $fname,
                    'lastname' =>$lname
                    );

        $this->load->model('volunteer_model');
        $this->volunteer_model->update($data,$username);
        $this->volunteer_model->update_user($data_user,$username);

		$msg = 'Update successully!';
        $role = $this->session->userdata('role');
        if($role == "admin"){
            redirect('home_admin');
        }elseif($role=="user"){
            redirect('home_user');
        }
		
	}
}