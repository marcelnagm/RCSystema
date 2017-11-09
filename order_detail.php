<?php

require_once "bootstrap.php";
//require_once 'model/Signup.php';
include_once("config.php");
require_once 'classes/Session.class.php';
$session = new Session();

if (isset($_GET['filter'])) {
    if ($_GET['filter'] == 'lib') {
        $session->setSession('filter_orders','lib' );
    }
    if ($_GET['filter'] == 'ent') {
        $session->setSession('filter_orders','ent' );
    }
}else{
    $session->setSession('filter_orders','' );
}
       ini_set('display_errors', 1);
        ini_set('log_errors', 1);
        ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
        error_reporting(E_ALL);
if ($session->getSession("user") != "" || $session->getSession("user") != null) {
    include 'html/order_detail.php';
} else {
    header("Location:index.php");
}
?>