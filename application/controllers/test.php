<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index($msg = NULL,$arr = NULL)
	{
		$data['msg'] = $msg;
		$quizid = $this->input->get('quizid',true);
		$this->load->model('quiz_model');
		$questions = $this->quiz_model->select_question_by_quizid($quizid);
		$answers = $this->quiz_model->select_answer();
		$data['answers'] = $answers->result();
		$data['questions'] = $questions->result();
		$data['quizid'] = $quizid;
		$role = $this->session->userdata('role');
        $data['role'] = $role;
        
     //    $total = 0;
     //    $correct = 0;
     //    if(!empty($arr)){
		   //  foreach($arr as $questionid => $useranswerarray) { 
		   //  	foreach($useranswerarray as $keys => $useranswer) { 
		   //  		foreach ($questions->result() as $row)
					// {
					//     if($questionid ==$row->questionid && $useranswer ==$row->correctanswer)
					//     {
					//     	$correct++;
					//     }
					// }
     //    		}
     //    		$total++;
		   //  }	
     //    }
        $correct_rate = 0;
        $correct_rate = $this->correct_rate($arr,$questions);
        
        $data['correct_rate'] = $correct_rate;
        $data['incorrect_rate'] = 100 - $correct_rate;
        $data['arr'] = $arr;
		$this->load->view('test_view', $data);
	}

	public function correct_rate($arr,$questions){
		$total = 0;
        $correct = 0;

        $quizid = $this->input->get('quizid',true);
		$questions = $this->quiz_model->select_question_by_quizid($quizid);
		
		foreach ($questions->result() as $row)
		{
		    $total++;
		}

        if(!empty($arr)){
		    foreach($arr as $questionid => $useranswerarray) { 
		    	foreach($useranswerarray as $keys => $useranswer) { 
		    		foreach ($questions->result() as $row)
					{
					    if($questionid ==$row->questionid && $useranswer ==$row->correctanswer)
					    {
					    	$correct++;
					    }
					}
        		}
        		// $total++;
		    }
		    if($total != 0){
		    	return (round($correct/$total,2))*100;
		    } 	
        }
        
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
	
	function insert_useranswer()
	{

		$this->load->model('quiz_model');
		$username = $this->session->userdata('username');

		if (isset($_POST['checkbox'])) 
		{
		    $ar = $_POST['checkbox'];
		    foreach($ar as $questionid => $useranswerarray) { 
		    	foreach($useranswerarray as $keys => $useranswer) { 
			    	$data = array(
						'username'   => $username,
	                    'questionid' => $questionid,
	                    'useranswer' => $useranswer
	                    );
	        		$this->quiz_model->insert_useranswer($data);
        		}
		    }
		}

        $msg = 'Finish!';
		$this->index($msg,$ar);
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