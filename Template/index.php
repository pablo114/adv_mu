<?php
ob_start();
session_start();

error_reporting(E_PARSE | E_ERROR | E_WARNING);

/************  Load config file *************/

include('conf/config.php');


/************  Autoload undefined classes *************/

function __autoload($class) {

    if(file_exists('inc/class/'. $class .'.class.php'))
		include_once('inc/class/'. $class .'.class.php');
	else echo '<b>Fatal:</b> Cannot load class '. $class .'<br>';
	
}

echo 'test<br><br>';

$user = new NewUser('pablo114', 'haselko', 'pablo114@interia.pl');
echo $user->createUser();

$db = new Db();
var_dump($db->saveNewUser('pawelek', 'haselek', 'emsa@wp.pl'));;


session_write_close();

?>