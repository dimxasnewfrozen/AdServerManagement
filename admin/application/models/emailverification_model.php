<?php

class EmailVerification_model extends Model
{
	
	public function getActivationFromCode($code)
	{	
		$code = $this->escapeString($code);

		$query = "select u.id from user_activations ua
				   left join users u on
				  ua.uid = u.id where ua.code = $code";
		$result = $this->query($query);
		if ($result)
			return $result[0]->id;
	}

	public function checkIfActive($email)
	{

		$email 	  = $this->escapeString($email);
		$query = "select status from users where email_address = $email";
		$result = $this->query($query);

		if ($result)
		{
			if ($result[0]->status == 1)
				return true;
			else
				return $result[0]->status;
		}
		else {
			return 2;
		}
	}

	public function createVerificationRecord($id, $code) 
	{

		$id = $this->escapeString($id);
		$code = $this->escapeString($code);

		$query = "INSERT into user_activations (uid, code) VALUES 
				 ($id, $code)";

		if ($this->execute($query))
			return true;	
	}

	public function createResend($id, $code) 
	{

		$id = $this->escapeString($id);
		$code = $this->escapeString($code);

		$query = "delete from user_activations where uid = $id";
		$this->execute($query);

		$query = "INSERT into user_activations (uid, code) VALUES 
				 ($id, $code)";

		if ($this->execute($query))
			return true;
		else {
			return false;
		}


	}

	public function setActive($user_id)
	{
		$user_id = $this->escapeString($user_id);

		$query = "update users set status = '1', date_verified = now() where id = $user_id";
		$this->execute($query);

		$query = "delete from user_activations where uid = $user_id";
		if ($this->execute($query))
			return true;
		else {
			return false;
		}
	}

}

