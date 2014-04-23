<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Answer extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$questionid = $this->input->get('questionid',true);
		$this->load->model('quiz_model');
		$query = $this->quiz_model->select_answer_by_questionid($questionid);
		$data['query'] = $query->result();
		$data['questionid'] = $questionid; 
		$this->load->view('answer_view', $data);
	}

	function insert()
	{
		
		$questionid  = $this->input->get('questionid',true);
		$answerorder = $_POST['answerorder'];
		$answer      = $_POST['answer'];


        $data = array(
                    'questionid'  => $questionid,
                    'answerorder' => $answerorder,
                    'answer'      => $answer
                    );

        $this->load->model('quiz_model');
        $this->quiz_model->insert_answer($data);

		$msg = 'Add successully!';
		$this->index($msg);
	}

	function delete()
	{
		$questionid  = $this->input->get('questionid',true);
		$answerid = $this->input->get('answerid',true);
		$this->load->model('quiz_model');
		$this->quiz_model->delete_answer_by_answerid($answerid);
		redirect("answer?questionid=".$questionid);
	}
}