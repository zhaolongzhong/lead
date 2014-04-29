<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Survey extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->view('survey_view', $data);
	}

	function insert()
	{

        $q1   = $_POST['q1'];
        $q2   = $_POST['q2'];
        $q3   = $_POST['q3'];
        $q4   = $_POST['q4'];
			
        $q2_reason 	 = $_POST['q2_reason'];
        $q4_reason 	 = $_POST['q4_reason'];

        
        $data = array(
            'q1' => $q1,
            'q2' => $q2,
            'q3' => $q3,
            'q4' => $q4,

                   'q2_reason' => $q2_reason,
                       'q4_reason' => $q4_reason
                    );

        $this->load->model('survey_model');
        $this->survey_model->insert($data);

		$msg = 'Send message successully!';
		$this->index($msg);
	}
	
	function loadsurvey($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->view('survey_view', $data);
	}
	function loadsurveyresults()
	{
		
		$this->load->model('survey_model');
		$query = $this->survey_model->get_all_surveyresults();
		
		$data['query'] = $query->result();
		$this->load->view('surveyresults_view', $data);
		
	}
}