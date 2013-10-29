<?php

class Initializer {

	public $pdo;
	
	function __construct() {
	
		$this->pdo = $this->dbConnect();
		
	}

	public function dbConnect() {
	
		try	{
		
			return new PDO(dbType .':server='. dbHost .';database='. dbName, dbLogin, dbPass);
				
		} catch (PDOException $error) {
		
			echo $error->getMessage();
				
		}
	
	}
	
	public function select() {
	
		try	{
		
			$query = $this->pdo->query("SELECT * FROM Character");
		
			if($query !== false)
				return $query->fetchAll();
			//var_dump($query);

				
		} catch (PDOException $error) {
		
			echo $error->getMessage();
				
		}
	
	}
	
	/*public function saveNewUser($login, $password, $email) {
	
		try	{
 
			$query = $this->pdo->prepare("INSERT INTO `users` (`login`, `password`, `email`, `join_date`) VALUES (:login, :password, :email, NOW())");
		
			if($query->execute(array(':login' => $login, ':password' => $password, ':email' => $email)))
				return true;
			else return false;
		
		} catch (PDOException $error) {
		
			echo $error->getMessage();
				
		}
	
	}*/
	
}

?>