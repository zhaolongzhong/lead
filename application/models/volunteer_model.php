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

    function select($username)
    {
        $query = $this->db->get_where('Volunteers', array('username' => $username));
        return $query;
    }
    function select_user($username)
    {
        $query = $this->db->get_where('Users', array('username' => $username));
        return $query;
    }

    // function select_user_all_info($username){
    //     $this->db->select('*');
    //     $this->db->from('Volunteers');
    //     $this->db->join('Users', 'Users.username = Volunteers.username');
    //     $this->db->where('username', $username);
    //     $query = $this->db->get();
    //     return $query;
    // }
    function update($data,$username)
    {
        $this->db->where('username', $username);
        $this->db->update('Volunteers', $data); 
    }
    function update_user($data,$username)
    {
        $this->db->where('username', $username);
        $this->db->update('Users', $data); 
    }
    function delete($username)
    {
    	$this->db->where('username',$username);
        $this->db->delete('Volunteers');
    }
    function joinaccount()
    {
        $this->db->select('*');
        $this->db->from('Volunteers');
        $this->db->join('Users', 'Users.username = Volunteers.username');
        // $this->db->join('Users', 'Users.username = Volunteers.username', 'left');
        $query = $this->db->get();
        return $query;
    }
}
?>