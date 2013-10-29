<?php

class NewUser extends User {

	public $email;
	
	function __construct($login, $password, $email) {
	
		parent::__construct($login, $password);
		$this->email = $email;
	
	}
	
	public function createUser() {
	
		//echo 'User '. $this->login .' ('. $this->email .') created.';
	
	}

}

?>