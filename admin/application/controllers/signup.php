<?php

class Signup extends Controller {


	public function __construct() 
	{
		parent::__construct();
	}

	public function index()
	{	
		
		if (@$this->authed_user[0]->id)
		{
			$this->redirect("/dashboard");
		}
		else {
			// clear any post data
			$data = $this->post();

			$this->redirect("/login");
		}
	}
	
	public function verify()
	{

		$signup = $this->loadView('verify');
		$data = $this->post(false);

		if ($data)
		{
			$signup->set("data", $data);
		}
		
		$header = $this->loadView('header');
		$header->render();

		$signup->render();
	}

	public function submit() 
	{

		// create user
		$data = $this->post(false);
		$submit = $this->loadView('submit_status');

		if ($data)
		{
			$creation_status = $this->user_model->createUser($data);
			$submit->set("status", $creation_status);
			

			if ($creation_status == "success")
			{

				$verification_code = $this->autoGenerateCode();
				$to = $data['email_address'];
				
				$id = $this->user_model->getByEmail($to);

				$verification_model = $this->loadModel("EmailVerification_model");
				$verification_model->createVerificationRecord($id, $verification_code);


				$email_helper = $this->loadHelper("Email_helper");
				$email_helper->createVerificationEmail($to, $verification_code);

			}
		}

		$header = $this->loadView('header');
		$header->render();
		$submit->render();

	}


	public function activate($code)
	{	

		$verification_model = $this->loadModel("EmailVerification_model");
		// get the user id for the code from the email
		$user_id = $verification_model->getActivationFromCode($code);
		if ($user_id == '')
		{
			// error - no code
			echo "Error";
		}
		else {
			// update user set it to active
			if ($verification_model->setActive($user_id))
			{
				// send to log in page?
				$this->redirect("/login");
			}
		}
	}

	public function resendActivation($email_address)
	{
		$submit = $this->loadView('submit_status');

		$verification_model = $this->loadModel("EmailVerification_model");
		

		$verification_code = $this->autoGenerateCode();

		$to = $email_address;
		$id = $this->user_model->getByEmail($to);

		if ($id)
		{
			$verification_model->createResend($id, $verification_code);

			$email_helper = $this->loadHelper("Email_helper");
			$email_helper->createVerificationEmail($to, $verification_code);
			$submit->set("status", "verification_resend");
		}
		else {
			$submit->set("status", "invalid_email");
		}

		$header = $this->loadView('header');
		$header->render();
	
		$submit->render();

	}


	/***********************************************/
	function licenseCodeCharacters( )
	{
		return array_merge( array( "i" ), range( "a", "z" ), range( "2", "4" ), range( "7", "9" ) );
	}

	function autoGenerateCode($license_version = "2.0.0")
	{	

		$chars = $this->licenseCodeCharacters( );
		$count = count( $chars );
		$ret = "";

		// from 6 - 9
		$limit = 20;
		// for( $i = 0; $i < 6; $i++ )

		for( $i = 0; $i < $limit; $i++ )
			$ret .= $chars[mt_rand( 0,$count - 1)];
		
		return $ret;
	}
	/***********************************************/




}