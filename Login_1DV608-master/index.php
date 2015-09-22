<?php

session_start();
date_default_timezone_set('Europe/Stockholm');

//Include the files needed
require_once('controller/Controller.php');

//MAKE SURE ERRORS ARE SHOWN... MIGHT WANT TO TURN THIS OFF ON A PUBLIC SERVER
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$controller = new Controller();
$controller->start();


