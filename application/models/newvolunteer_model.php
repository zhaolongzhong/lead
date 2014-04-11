<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class newvolunteer_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function insert(){
    	$VID 			 = $this->security->xss_clean($this->input->post('VID'));
    	$Age 			 = $this->security->xss_clean($this->input->post('Age'));
    	$Fname 			 = $this->security->xss_clean($this->input->post('Fname'));
    	$Lname 			 = $this->security->xss_clean($this->input->post('Lname'));
    	$ActiveVolunteer = $this->security->xss_clean($this->input->post('ActiveVolunteer'));
    	$Email 		     = $this->security->xss_clean($this->input->post('Email'));
    	$StreetAddress   = $this->security->xss_clean($this->input->post('StreetAddress'));
    	$City 		     = $this->security->xss_clean($this->input->post('City'));
    	$StateCode       = $this->security->xss_clean($this->input->post('StateCode'));
    	$PrimaryPhone    = $this->security->xss_clean($this->input->post('PrimaryPhone'));
    	$AltPhone 	     = $this->security->xss_clean($this->input->post('AltPhone'));

        
        $sql = "INSERT INTO Volunteers(VID, Age, Fname,Lname,ActiveVolunteer,Email,StreetAddress,City,StateCode,PrimaryPhone,AltPhone) 
        VALUES (".$this->db->escape($VID).",
        		".$this->db->escape($Age).",
        		".$this->db->escape($Fname).",
        		".$this->db->escape($Lname).",
        		".$this->db->escape($ActiveVolunteer).",
        		".$this->db->escape($Email).",
        		".$this->db->escape($StreetAddress).",
        		".$this->db->escape($City).",
        		".$this->db->escape($StateCode).",
        		".$this->db->escape($PrimaryPhone).",
        		".$this->db->escape($AltPhone).")";

        if($this->db->query($sql)==1){
            return true;
        }else{
            return false;
        }
    }
}
?>