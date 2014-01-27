<?php

class Session_helper {

	public static function set($key, $val)
	{
		$_SESSION["$key"] = $val;
	}
	
	public static function get($key)
	{

		if (isset($_SESSION["$key"]))
			return $_SESSION["$key"];
		else
			return false;
		
	}

	public static function destroy($key)
	{
		if ($key) {
			unset($_SESSION[$key]);
		}
		else {
			session_destroy();
		}
		
	}


}

?>