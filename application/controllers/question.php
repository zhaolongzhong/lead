<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Question extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$id = $this->input->get('id',true);
		$this->load->model('quiz_model');
		$query = $this->quiz_model->join_question_answer();
		$question = $this->quiz_model->get_question();
		$data['query'] = $query->result();
		$data['question'] = $question->result();

		$this->load->view('question_view', $data);
	}
}