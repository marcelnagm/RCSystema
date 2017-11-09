<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once 'bootstrap.php';
require_once 'classes/Session.class.php';
require_once 'model/Signup.php';
if (isset($_POST['login_username']) && $_POST['login_username'] != "") {
   $data = array(
        "login_username" => $_POST['login_username'],
        "login_password" => md5($_POST['login_password'])
    );
    $result = Signup::login($data, $entityManager);    
        if (count($result) == 1) {                
        $session = new Session();
        $session->setSession("user", $result[0]);        
        $redirect = 'home.php';        
        header("location:$redirect");
    } else {        
        $redirect = 'index.php';
        header("location:$redirect");
    }
//    echo json_encode($success);
}
?>