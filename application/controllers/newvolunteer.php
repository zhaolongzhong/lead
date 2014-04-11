<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newvolunteer extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->view('newvolunteer_view', $data);
	}

	function insert()
	{
		$VID 			 = $_POST['VID'];
    	$Age 			 = $_POST['Age'];
    	$Fname 			 = $_POST['Fname'];
    	$Lname 			 = $_POST['Lname'];
    	$ActiveVolunteer = $_POST['ActiveVolunteer'];
    	$Email 		     = $_POST['Email'];
    	$StreetAddress   = $_POST['StreetAddress'];
    	$City 		     = $_POST['City'];
    	$StateCode       = $_POST['StateCode'];
    	$PrimaryPhone    = $_POST['PrimaryPhone'];
    	$AltPhone 	     = $_POST['AltPhone'];
			
        $data = array(
                    'VID' => $VID,
                    'Age' => $Age,
                    'Fname' => $Fname,
                    'Lname' =>$Lname,
                    'ActiveVolunteer' => $ActiveVolunteer,
                    'Email' => $Email,
                    'StreetAddress' => $StreetAddress,
                    'City' => $City,
                    'StateCode' => $StateCode,
                    'PrimaryPhone' => $PrimaryPhone,
                    'AltPhone' => $AltPhone
                    );

        $this->load->model('volunteer_model');
        $this->volunteer_model->insert($data);

		$msg = 'Add successully!';
		$this->index($msg);
	}
}