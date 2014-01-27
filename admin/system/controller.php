<?php

class Controller {
	
	private $post_data, $get_data;

	public $active_menu, $menu, $userid, $authed_user, $user_model;

	public $session_model;

	public function __construct($verify = false)
	{

		$this->session_model = 	$this->loadModel('Session_model');
		$this->user_model    = $this->loadModel('User_model');
		$this->userid 		 = $this->checkAuth();
	
		if ($this->userid)
		{
			
			$this->authed_user  = $this->user_model->getById($this->userid);
			if (!$this->authed_user)
				$this->authed_user = array();
		}
		else {
			if ($verify)
			{
				$this->redirect("/");
			}
			$this->authed_user = array();
		}
	}

	
	public function checkAuth() 
	{
		//$uid 	    	= $_SESSION['uid'];
		$key 	    	= @$_COOKIE['mmid'];
		$uid 			= $this->session_model->checkSession($key);
		return $uid;
	}

	public function createNewSession($uid) 
	{
		//$uid 	    		= $_SESSION['uid'];
		$key 	    		= @$_COOKIE['mmid'];
		$this->session_model->newSession($uid, $key);
	}
	
	public function removeSession() 
	{
		//$uid 	    		= $_SESSION['uid'];
		$key 	    		= @$_COOKIE['mmid'];
		$this->session_model->removeSession($key);
	}
	


	public function set_default_vars()
	{
		global $config;
		$this->menu 		= $config['menu'];
		$this->active_menu  = Session_helper::get("active_menu");

		$session_users_array = array();
		$session_users 		 = Session_helper::get("session_users");

		if ($session_users) {
			foreach($session_users as $suser) 
			{
				$session_users_array[] = $this->user_model->getById($suser);
			}
		}
		return array("menu" => $this->menu, "active_menu" => $this->active_menu, "session_users" => $session_users_array);
	}
	

	public function loadModel($name)
	{
		require(APP_DIR .'models/'. strtolower($name) .'.php');

		$model = new $name;
		return $model;
	}


	public function loadView($name)
	{
		$view = new View($name);
		return $view;
	}
	
	public function loadPlugin($name)
	{
		require(APP_DIR .'plugins/'. strtolower($name) .'.php');
	}
	
	public function loadHelper($name, $contructor_vals = false)
	{
		require(APP_DIR .'helpers/'. strtolower($name) .'.php');

		if ($contructor_vals)
			$helper = new $name($contructor_vals);
		else 
			$helper = new $name();
		return $helper;
	}
	
	public function redirect($loc)
	{
		global $config;
		header('Location: '. $config['base_url'] . $loc);
	}
    
    // Handle a POST request with the option of using PRG - POST/REQUEST/GET
    public function post($redirect = true) {

    	global $config;

    	if ($_POST) 
    	{

    		$data = $this->build_form_array($_POST);
    		Session_helper::set('post_data', $_POST);
			$url = parse_url($_SERVER['REQUEST_URI']);	

			//if ($redirect)
				header('Location: '. $url['path']);
			//else
				//return $data;

    	}
    	else 
    	{

    		$session_data = Session_helper::get('post_data');

    		if (isset($session_data)) {

				$this->post_data = $session_data;

				if ($redirect != false) {
					Session_helper::destroy('post_data');
				}
				return $this->post_data;
    		}
 			else {
 				return false;
 			}
    	}
    }


	// Handle a GET request with the option of using PRG - POST/REQUEST/GET
    public function get_var($redirect = false) {

    	global $config;
		
    	if ($_GET) 
    	{

    		$data = $this->build_form_array($_GET);
			Session_helper::set('get_data', $_GET);
			$url = parse_url($_SERVER['REQUEST_URI']);

			if ($redirect)
				header('Location: '. $url['path']);
			else
				return $data;

    	}
    	else 
    	{

    		$session_data = Session_helper::get('get_data');

    		if (isset($session_data)) {
				$this->get_data = $session_data;
				Session_helper::destroy('get_data');
				return $this->get_data;

    		}
 			else {
 				return false;
 			}

    	}
    }
	
    public function postVarsMatching($re, $array)
	{	
		$ret = array( );
		foreach( $array as $k => $v )
			if( preg_match( $re, $k ) )
					$ret[$k] = $v;
		return $ret;
	}


	// Build an array from the POST/GET vars to more easily use
	public function build_form_array($form_values) 
	{
		
		$data = array();
		foreach($form_values as $key => $value)
			$data[$key] = $value;
		return $data;
		
	}

	public function log($action, $description = "", $severity = 1, $username = "")
	{

		$ip_address = $_SERVER['REMOTE_ADDR'];

		if (!$username)
			$username   = $this->authed_user[0]->username;

  		$this->log_model->add($severity, $action, $ip_address, $username, $description);

  		return true;

	}

}

?>