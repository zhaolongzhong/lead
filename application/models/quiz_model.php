<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quiz_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function get_quiz_table(){
        $query = $this->db->get('Quiz');
        return $query;
    }

    function get_question(){
        $query = $this->db->get_where('QuizQuestion');
        return $query;
    }
    function join_question_answer()
    {
        $this->db->select('*');
        $this->db->from('QuizAnswer');
        // $this->db->get_where('QuizAnswer',array('questionid' =>'9'))
        $this->db->join('QuizQuestion', 'QuizQuestion.questionid = QuizAnswer.questionid');
        $query = $this->db->get();
        return $query;
    }

    function get_answer($id){
        $query = $this->db->get_where('QuizAnswer', array('id' =>$id));
        return $query;
    }

    function select_question()
    {
        $query = $this->db->get_where('Question');
        return $query;
    }

    function select_question_by_quizid($quizid)
    {
        $query = $this->db->get_where('Question',array('quizid' =>$quizid));
        return $query;
    }

    function insert_question($data){
        $this->db->insert('Question',$data);
    }
    function delete_question($questionid)
    {
        $this->db->where('questionid', $questionid);
        $this->db->delete('Question');
    }
    function update_question($testid,$testorder,$data){
        $this->db->where('testid', $testid);
        $this->db->update('QuizQuestion', $data, array('testid' => $testid,
                                                        'testorder' => $testorder));
    }
    function insert($data)
    {
        $this->db->insert('Quiz',$data);
    }

    function insert_answer($data){
        $this->db->insert('Answer',$data);
    }
    function select_answer()
    {
        $query = $this->db->get_where('Answer');
        return $query;
    }
    function select_answer_by_questionid($questionid)
    {
        $query = $this->db->get_where('Answer', array('questionid' =>$questionid));
        return $query;
    }

    function delete_answer_by_answerid($answerid)
    {
        $this->db->where('answerid', $answerid);
        $this->db->delete('Answer');
    }
    // function select($username)
    // {
    //     $query = $this->db->get_where('Volunteers', array('username' =>$username));
    //     return $query;
    // }
    // function update($data,$username)
    // {
    //     $this->db->where('username', $username);
    //     $this->db->update('Volunteers', $data); 
    // }
    // function delete($username)
    // {
    // 	$this->db->where('username',$username);
    //     $this->db->delete('Volunteers');
    // }
    // function joinaccount()
    // {
    //     $this->db->select('*');
    //     $this->db->from('Volunteers');
    //     $this->db->join('UserAuthentication', 'UserAuthentication.username = Volunteers.username');
    //     // $this->db->join('UserAuthentication', 'UserAuthentication.username = Volunteers.username', 'left');
    //     $query = $this->db->get();
    //     return $query;
    // }
}
?>