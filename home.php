<?php
require_once "bootstrap.php";
require_once 'model/Signup.php';
include_once("config.php");
require_once 'classes/Session.class.php';
$session = new Session();

if ($session->getSession("user") != "" || $session->getSession("user") != null ) {   
    include 'html/home.php';
} else {
    header("Location:index.php");
} ?>