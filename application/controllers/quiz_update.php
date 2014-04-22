<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quiz_update extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$id = $this->input->get('id',true);
		$this->load->model('quiz_model');
		// $query = $this->quiz_model->join_question_answer();
		$question = $this->quiz_model->get_question($id);
		// $data['query'] = $query->result();
		$data['question'] = $question->result();

		$this->load->view('quiz_update_view', $data);
	}

	function insert()
	{
		$testid 	      = $_POST['testid'];
    	$testorder 	      = $_POST['testorder'];
    	$istruefalse      = $_POST['istruefalse'];
    	$ismultiplechoice = $_POST['ismultiplechoice'];
    	$isinput          = $_POST['isinput'];
    	$question 	      = $_POST['question'];
			
        $data = array(
                    'testid' 		   => $testid,
                    'testorder' 	   => $testorder,
                    'istruefalse' 	   => $istruefalse,
                    'ismultiplechoice' =>$ismultiplechoice,
                    'isinput' 		   => $isinput,
                    'question' 	       => $question
                    );

        $this->load->model('quiz_model');
        $this->quiz_model->insert_question($data);

		$msg = 'Add successully!';
		$this->index($msg);
	}
}