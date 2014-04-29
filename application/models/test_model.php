<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function get_all_user_info(){
        $query = $this->db->get('Users');
        return $query;
    }
    function get_all_user(){
    	$query = $this->db->get('Users');
    	return  $query;
    }
}
?>