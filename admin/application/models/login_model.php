<?php

class Login_model extends Model
{

	public function authenticate($data)
	{

		global $config;

		$email 	  = $this->escapeString($data['email_address']);
		$password = $this->escapeString(md5($config['salt'] . $data['password'] . $config['salt']));

		$query = "select id, status from users where email_address = $email and password = $password and status = 1";
		$result = $this->query($query);
		if ($result)
			return $result[0];
		else
			return false;

	}	
}


?>