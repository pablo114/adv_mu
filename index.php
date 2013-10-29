<?php

/************  Basic website settings *************/

ob_start();

session_start();

error_reporting(E_PARSE | E_ERROR | E_WARNING);


/************  Load config file *************/

include('Config/config.php');


/************  Autoload undefined classes *************/

function __autoload($class) {

    if(file_exists('Includes/Class/'. $class .'.class.php'))
		include_once('Includes/Class/'. $class .'.class.php');
	else echo '<b>Fatal:</b> Cannot load class '. $class .'<br>';
	
}

echo 'Test version<br><br>';

//$user = new NewUser('login', 'password', 'email@address.com');
//echo $user->createUser();

//$Initializer = new Initializer();
//var_dump($Initializer->select());

$UserRanking = new UserRanking();
$UserRanking->useReset = true;
$UserRanking->useName = true;
$UserRanking->useOnline = true;
var_dump($UserRanking->prepareUserRankingSelectStatement());
var_dump($UserRanking->generateUserRanking());
//var_dump($db->saveNewUser('login', 'password', 'email@address.com'));;

$router = new Router();
$router->route();

/************  Close session *************/

session_write_close();

?>