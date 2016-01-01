<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contact extends CI_Controller {
	public function index(){
		
		//Change the email where do you want the email from contact form to be send
		$yourEmail = 'info@mangosoft.info';

		if(isset($_POST['submitContact'])){
			$fullname = mysql_real_escape_string($_POST['fullname']);
			$email = mysql_real_escape_string($_POST['email']);
			$subject = mysql_real_escape_string($_POST['subject']);
			$msg = mysql_real_escape_string($_POST['msg']);

			$to = $yourEmail;

		    $from = strip_tags($email);
		    $headers = "MIME-Version: 1.0\r\n";
		    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$headers .= "From:" .$from;

		    $message = '<html><head><title>LyraCMS Email</title></head><body>';
		    $message .= '<p><b>Full Name : </b>'.$fullname.'<br /><br /><b>Subject : </b><br />'.$subject.'<br />'.$msg.'</p>';
		    $message .= '</body></html>';

		    if(mail($to, $subject, $message, $headers,'-f'.strip_tags($email))){
		    	$data['messageSend'] = "Message send successfully !";
		    }
		}

		$data['select'] = 'contact';
		$data['page'] = 'contact.php';
		$this->load->view('website/index', $data);
	}
}
