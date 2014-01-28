<?php

class Ad extends Controller {

	public function __construct() 
	{
		parent::__construct(true);
	}

	public function index()
	{	}

	public function add()
	{

		$data = $this->post();
		//$ad_model = $this->loadModel("ad_model");
		//

		if ($data) 
		{
			$user = $this->authed_user[0]->id;
			if ($user)
			{
				if ($data['client'] == "new")
				{
					// add new client
					// return client_id
					$client_model = $this->loadModel("client_model");
					$client_id = $client_model->addClient($data);
				}
				else {
					$client_id = $data['client'];
				}

				echo $client_id;
				exit;




				// insert ad
				exit;
			}

			$this->redirect("/show/current");
		
		}
	}

}