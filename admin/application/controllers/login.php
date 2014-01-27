<?php

class Login extends Controller {

	public function __construct() 
	{
		parent::__construct();
	}

	public function index()
	{	

		global $config;

		$data = $this->post();
		$status = '';
		$login = $this->loadView('login');


		if (isset($data['email_address']) && (isset($data['password'])))
		{	

			$login_model = $this->loadModel("Login_model");
			$result = $login_model->authenticate($data);

			$login->set("email", $data['email_address']);
			if (!$result)
			{
				$status = "invalid";
			}
			elseif (isset($result->id) && ($result->status == 1))
			{

				$key = md5($config['salt'] . $result->id . $config['salt']);

				if(isset($_COOKIE['mmid'])) {
				  unset($_COOKIE['mmid']);
				  setcookie('mmid', '', time() - 3600); // empty value and old timestamp
				}

				setcookie("mmid",$key, time()+3600*60, "/", "");
				$_COOKIE['mmid'] = $key;

				$this->createNewSession($result->id);

				$this->redirect("/");
			}
			elseif ($result->status == 0) {
				// not authorized yet
				$status = "unverified";
			}
		}

		$header = $this->loadView('header');
		$header->render();

		$login->set("status", $status);
		$login->set("user", $this->authed_user);
		$login->render();

	}

}