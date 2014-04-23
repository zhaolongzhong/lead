<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quiz_new extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->view('quiz_new_view', $data);
	}

	function insert()
	{
		
		$quizid    = $_POST['quizid'];
    	$quiztitle = $_POST['quiztitle'];
        $data = array(
                    'quizid'     => $quizid,
                    'quiztitle'  => $quiztitle
                    );

        $this->load->model('quiz_model');
        $this->quiz_model->insert($data);

		$msg = 'Add successully!';
		$this->index($msg);
	}
}