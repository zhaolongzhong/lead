<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Assignment_new extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$data['courseid'] = $this->input->get('courseid',true);

		$this->load->view('assignment_new_view', $data);
	}

	function insert()
	{
		
		$courseid 	 = $_POST['courseid'];
    	$aname  = $_POST['aname'];
    	$duedate  = $_POST['duedate'];
    	$description = $_POST['description'];
	
        $data = array(
                    'courseid'     => $courseid,
                    'aname'  => $aname,
                    'duedate'  => $duedate,
                    'description' => $description,
                    );

        $this->load->model('assignment_model');
        $this->assignment_model->insert($data);

        $course_folder = "./p/" . $courseid;
        $assignment_folder = $course_folder . '/'.$aname;

        if (!is_dir($course_folder)){
			mkdir($course_folder, 0777, TRUE);	
		}else if (!is_dir($assignment_folder)){
			mkdir($assignment_folder, 0777, TRUE);	
		}

		$msg = 'Add successully!';
		$this->index($msg);
	}
}