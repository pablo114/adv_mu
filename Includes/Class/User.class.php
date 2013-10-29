<?php

class User {

	public $login;
	public $password;
	
	function __construct($login, $password) {
	
		$this->login = $login;
		$this->password = $password;
		
	}

	public function authenticateUser() {
	
		echo 'User '. $this->login .' authenticated.';
	
	}
	
}

?>