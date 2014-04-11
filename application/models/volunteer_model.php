<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Volunteer_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function get_all_volunteers(){
        $query = $this->db->get('Volunteers');
        return $query;
    }
    function delete($vid)
    {
    	$this->db->where('VID',$vid);
        $this->db->delete('Volunteers');
    }
}
?>