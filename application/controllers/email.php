<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
        $firstname = $this->session->userdata('firstname');
        $data['firstname'] = $firstname;
		$this->load->view('email_view', $data);
	}

	function send_message()
	{

        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        
        $recipients1 = $_POST['recipients1'];
        $recipients2 = $_POST['recipients2'];
        $recipients3 = $_POST['recipients3'];
        $recipients4 = $_POST['recipients4'];

		$this->load->model('volunteer_model');
		$query = $this->volunteer_model->get_all_volunteers();
        
        $recipients = "";
        
        foreach($query->result() as $vol){
            if ($recipients1=='1' and $vol->type == '0') {
                $recipients .= "Bcc:". $vol->username ."\n";
            }
            if ($recipients2=='1' and $vol->type == '1') {
                $recipients .= "Bcc:". $vol->username ."\n";
            }
            if ($recipients3=='1' and $vol->type == '2') {
                $recipients .= "Bcc:". $vol->username ."\n";
            }
            if ($recipients4=='1' and $vol->type == '3') {
                $recipients .= "Bcc:". $vol->username ."\n";
            }
        }
        
        $data = array(
                    'subject' => $subject,
                    'message' => $message,
                    'recipients' => $recipients
                    );

        $this->load->model('email_model');
        $this->email_model->insert($data);


        
        //mail($list_of_emails,$subject,$message,"From:webmaster@deaflead.com\n");
        

		$msg = 'Send message successully!';
		$this->index($msg);
	}
}