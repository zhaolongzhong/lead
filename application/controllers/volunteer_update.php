<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Volunteer_update extends CI_Controller {

	public function index($msg = NULL)
	{
		$this->load->helper('form');
        $username = $this->input->get('username',true);
        $role = $this->session->userdata('role');
        $data['role'] = $role;
        $firstname = $this->session->userdata('firstname');
        $data['firstname'] = $firstname;
        $data['username'] = $username;
		$data['msg'] = $msg;
        $this->load->model('volunteer_model');
		$query = $this->volunteer_model->select($username);
		$data['query'] = $query->result();
        $users = $this->volunteer_model->select_user($username);
        $data['users'] = $users->result();
		$this->load->view('volunteer_update_view', $data);
	}

	function update()
	{
        $this->load->helper('form');

        // $username = $this->input->get('username',true);
        $username = $_POST['username'];
        $path = './p/photo/'.$username;
        if (!is_dir($path)){
            mkdir($path, 0777, TRUE);    
        }
        $config['upload_path'] = $path;
        $config['allowed_types'] = '*';
        // $config['max_size']  = '100';
        // $config['max_width']  = '1024';
        // $config['max_height']  = '768';

        $this->load->library('upload', $config);

        $this->upload->do_upload();


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
                    'password' => $password
                    );

        $this->load->model('volunteer_model');
        $this->volunteer_model->update($data,$username);
        $this->volunteer_model->update_user($data_user,$username);

		$msg = 'Update successully!';
        $role = $this->session->userdata('role');
        if($role == "admin"){
            redirect('volunteer_update'.'?username='.$username);
        }elseif($role=="user"){
            redirect('volunteer_update'.'?username='.$username);
        }
	}

    function delete_image()
    {
        $username = $this->input->get('username',true);
        $imagepath = $this->input->get('imagepath',true);
        unlink($imagepath);
        redirect('volunteer_update'.'?username='.$username);
    }
}