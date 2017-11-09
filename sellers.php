<?php
require_once "bootstrap.php";
//require_once 'model/Signup.php';
include_once("config.php");
require_once 'classes/Session.class.php';
$session = new Session();
        ini_set('display_errors', 1);
        ini_set('log_errors', 1);
        ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
        error_reporting(E_ALL);
        error_reporting(E_ALL);

if ($session->getSession("user") != "" || $session->getSession("user") != null ) {   
    include 'html/sellers.php';
} else {
    header("Location:index.php");
} ?>