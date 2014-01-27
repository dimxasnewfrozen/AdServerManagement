<?php

class Logout extends Controller {

	public function __construct() 
	{
		parent::__construct();
	}

	public function index()
	{	

		$this->removeSession($_COOKIE['mmid']);

		$this->redirect("/");

	}

}