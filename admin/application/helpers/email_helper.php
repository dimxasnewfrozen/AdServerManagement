<?php
class Email_helper {

	public function __construct() 
	{

		global $config;

		$this->conf 	   = $config;
		$this->random_hash = md5(date('r', time()));

		$this->headers  = 'MIME-Version: 1.0' . "\r\n";
		$this->headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$this->headers .= 'From: admin@mechanicvillemile.com' . "\r\n" .
			'Return-Path: admin@mechanicvillemile.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
	}

	/********************************************************************************/
	# New user added - send verification email
	/********************************************************************************/
	public function createVerificationEmail($email, $code)
	{
	
		global $Config;
	
		$subject = 'Welcome to The Mechanicville Voice : Activation E-mail';
		$message = "<h3>Welcome to the Mechanicville Voice.</h3>
		<p> Thank you for creating an account. Before you continue click on the link below to activate your account! </p>
		<a href='http://localhost/mm/signup/activate/$code'>http://localhost/mm/signup/activate/$code</a>";

		$to = $email;
	
		if (!mail($to, $subject, $message, $this->headers)) {
			echo "Mail not sent!";
		}
	}
	# End service email
	/********************************************************************************/
}

?>
