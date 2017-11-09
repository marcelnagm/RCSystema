<?php

// bootstrap.php
require './classes/Session.class.php';
require './entities/User.php';
require './entities/Seller.php';
require './entities/Order.php';
require './model/SellersModel.php';
require './model/OrdersModel.php';

if (!class_exists("Doctrine\Common\Version.php", false)) {
    require_once "bootstrap_doctrine.php";
}


if (isset($_GET['debug'])) {
    $_SESSION['debug'] = $_GET['debug'];
}

if (session_status() == PHP_SESSION_ACTIVE) {
    if ($_SESSION['debug'] == 1) {
        ini_set('display_errors', 1);
        ini_set('log_errors', 1);
        ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
        error_reporting(E_ALL);
        error_reporting(E_ALL);
    }
}