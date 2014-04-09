<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index($msg = NULL)
	{
		// $query = $this->db->query('SELECT * FROM puppy')->result();
		// $data = array(
		// 	'query' => $query);
		// $this->load->view('show_puppies', $data);
		$data['msg'] = 'some message';
		$this->load->model('login_model');
		$query = $this->login_model->get_all_user_info();
		
		// foreach ($query->result() as $row)
  //       {
  //           echo $row->uid;
  //           echo $row->username;
  //           echo $row->password;
  //       }

		$data['query'] = $query->result();

		$this->load->view('login_view', $data);
	}

	function process()
	{
		$this->load->model('login_model');
		$result = $this->login_model->validate();
		if(!$result){
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
			$this->index($msg);
		}else{
			redirect('home');
		}
	}
}