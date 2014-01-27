<?php

class Show extends Controller {

	public function __construct() 
	{

		parent::__construct(true);


	}

	public function index()
	{	

		$this->redirect("/show/current");

	}

	public function current()
	{	

		$header = $this->loadView('header');
		$header->render();
		$current = $this->loadView('/show/current');

		$saved_status = Session_helper::get("saved_status");

		if (@$saved_status)
			$current->set("saved_status", $saved_status);
		else {
			$current->set("saved_status", "");
		}

		Session_helper::destroy("saved_status");

		$current->set("user", $this->authed_user);
		$current->set("current_view", "current");
		$current->render();

	}

	public function groups()
	{

		$group_model = $this->loadModel("group_model");
		$groups 	 = $group_model->getGroups();

		$header = $this->loadView('header');
		$header->render();
		$current = $this->loadView('/show/groups');
		$current->set("current_view", "groups");
		$current->set("user", $this->authed_user);
		$current->set("groups", $groups);
		$current->render();

	}

}