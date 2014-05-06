<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Answer_analysis extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$firstname = $this->session->userdata('firstname');
    	$data['firstname'] = $firstname;
		$quizid = $this->input->get('quizid',true);
		$questionid = $this->input->get('questionid',true);
		$this->load->model('quiz_model');
		$query = $this->quiz_model->select_answer_by_questionid($questionid);
		$data['query'] = $query->result();
		$data['questionid'] = $questionid; 
		$data['quizid'] = $quizid; 
		$this->load->view('answer_view', $data);
	}
}