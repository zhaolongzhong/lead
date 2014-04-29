<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NewsPost extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->model('newspost_model');
		$query = $this->newspost_model->get_all_newsposts();
		$data['query'] = $query->result();

		//$this->load->model('quiz_model');
		//$quizlist = $this->quiz_model->get_quiz_table();
		//$data['quizlist'] = $quizlist->result();

		$this->load->view('newspost_view', $data);
	}


	public function do_logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
?>