<?php
require_once "bootstrap.php";
//require_once 'model/Signup.php';
include_once("config.php");
require_once 'classes/Session.class.php';
$session = new Session();


if ($session->getSession("user") != "" || $session->getSession("user") != null ) {   
    
if(!$_GET['id']) {    
    $action= 'add';
}  else {
    $action= 'edit';    
    $params['id'] = $_GET['id'];
    $order = OrdersModel::getOne($entityManager, $params);
    
}
    
    include 'html/orders_new.php';
} else {
    header("Location:index.php");
} ?>