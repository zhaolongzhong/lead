<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$quizid = $this->input->get('quizid',true);
		$this->load->model('quiz_model');
		$questions = $this->quiz_model->select_question_by_quizid($quizid);
		$answers = $this->quiz_model->select_answer();
		$data['answers'] = $answers->result();
		$data['questions'] = $questions->result();
		$data['quizid'] = $quizid;
		$this->load->view('test_view', $data);
	}
	function insert()
	{
		
		$quizid        = $this->input->get('quizid',true);
		$questionorder = $_POST['questionorder'];
		$questiontype  = $_POST['questiontype'];
		$question      = $_POST['question'];
		$correctanswer = $_POST['correctanswer'];

        $data = array(
                    'quizid'     => $quizid,
                    'questionorder'     => $questionorder,
                    'questiontype'     => $questiontype,
                    'question'     => $question,
                    'correctanswer'  => $correctanswer
                    );

        $this->load->model('quiz_model');
        $this->quiz_model->insert_question($data);

		$msg = 'Add successully!';
		$this->index($msg);
	}
	
	function delete()
	{
		$questionid  = $this->input->get('questionid',true);
		$quizid = $this->input->get('quizid',true);
		$this->load->model('quiz_model');
		$this->quiz_model->delete_question($questionid);
		redirect("quiz?questionid=".$questionid."&quizid=".$quizid);
	}
}
?>