<?php

class Error extends Controller {

	public function __construct() 
	{
	}

	public function index()
	{
		$header = $this->loadView('header');
		$header->render();

		$signup = $this->loadView('error');
		$signup->render();
	
	}
}