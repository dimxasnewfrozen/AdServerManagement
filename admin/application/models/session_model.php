<?php

class Session_model extends Model 
{

	public function checkSession($key) 
	{

		$session_id = session_id();
		$ip_address = $_SERVER['REMOTE_ADDR'];
		$key 		= $this->escapeString($key);

		$query = "select uid from session where cookie_id = $key and ip_address = '$ip_address'"; //and session_id = '$session_id'";
		$result = $this->query($query);

		if ($result) 
			return $result[0]->uid;
		else
			return false;


	}

	public function newSession($uid, $key)
	{

		$this->removeSession($uid);

		$session_id = session_id();
		$ip_address = $_SERVER['REMOTE_ADDR'];
		$uid 		= $this->escapeString($uid);

		$query = "insert into session (uid, session_id, cookie_id, ip_address, date)
					values ($uid, '$session_id', '$key', '$ip_address', NOW())";

		$result = $this->execute($query);

		return true;

	}

	public function removeSession($cookie_id) 
	{

		$cookie_id 	= $this->escapeString($cookie_id);
		$query = "delete from session where cookie_id = $cookie_id";
		$result = $this->execute($query);

	}
}

?>
