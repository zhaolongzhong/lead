<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Volunteer_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function get_all_volunteers(){
        $query = $this->db->get('Volunteers');
        return $query;
    }

    function insert($data)
    {
        $this->db->insert('Volunteers',$data);
    }

    function select($email)
    {
        $query = $this->db->get_where('Volunteers', array('email' =>$email));
        return $query;
    }
    function update($data,$email)
    {
        $this->db->where('email', $email);
        $this->db->update('Volunteers', $data); 
    }
    function delete($email)
    {
    	$this->db->where('email',$email);
        $this->db->delete('Volunteers');
    }
}
?>