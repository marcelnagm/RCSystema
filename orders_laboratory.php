<?php

require_once "bootstrap.php";
//require_once 'model/Signup.php';
include_once("config.php");
require_once 'classes/Session.class.php';
$session = new Session();


if ($session->getSession("user") != "" || $session->getSession("user") != null) {
    if($session->getSession("user")['permission'] != 'laboratory'){
         header("Location:index.php");
    }else $session->setSession('filter_orders','laboratory' );
    if (isset($_GET['filter'])) {
    if ($_GET['filter'] == 'lib') {
        $session->setSession('filter_orders','lib' );
    }
    if ($_GET['filter'] == 'ent') {
        $session->setSession('filter_orders','ent' );
    }
}else{
    $session->setSession('filter_orders','laboratory' );
}
    
    include 'html/orders_laboratory.php';
    
} else {
    header("Location:index.php");
}
?>