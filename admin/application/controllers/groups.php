<?php

class Groups extends Controller {

	public $entries_model;

	public function __construct() 
	{
		parent::__construct(true);
	}

	public function index()
	{	

		global $config;

		$header = $this->loadView('header');
		
		$header->render();

		$add_post = $this->loadView('show/groups');
		$add_post->set("user", $this->authed_user);


		$add_post->render();

	}

	public function add()
	{

		$data = $this->post();
		$group_model = $this->loadModel("group_model");

		if ($data) 
		{
			$user = $this->authed_user[0]->id;
			if ($user)
			{
				if ($group_model->createGroup($data)) 
				{
					Session_helper::set("saved_status", "success");
				}
				else {
					Session_helper::set("saved_status", "failed");
				}

			}

			$this->redirect("/show/groups");
			
		}

	}

}