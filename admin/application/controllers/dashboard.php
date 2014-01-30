<?php

class Dashboard extends Controller {

	public function __construct() 
	{	
		parent::__construct(true);
	}

	public function index()
	{	
		$header = $this->loadView('header');
		$header->render();
		$main = $this->loadView('dashboard');
		$main->set("current_view", "dashboard");
		$main->render();
	}


}