<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Signup
 *
 * @author sathish
 */
require_once "bootstrap.php";

class Signup {

    protected $res;

    //put yor code here
    public function __construct() {
        
    }

    static public function generateRandomString() {
        $length = 20;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters = str_shuffle($characters);
        return substr($characters, 0, $length);
    }

    static public function save($data, $entityManager) {
        session_start();
        $register = new UserRegister();
        $activation = Signup::generateRandomString();
        $dob = $data['year'] . '-' . $data['month'] . '-' . $data['day'];
        $register->setFirstName($data['firstname']);
        $register->setLastName($data['lastname']);
        $register->setEmail($data['email']);
        $register->setPassword(md5($data['password']));
        $register->setPhoto($photo);
        $register->setActivation($activation);
        $register->setDOB(new DateTime($dob));
        $register->setRegStatus("PENDING");
        $register->setSignupDate(new DateTime());
        $register->setSessionId(session_id());
        $register->setGender($data['gender']);
        $entityManager->getConnection()->beginTransaction();
        try {
            $res = $entityManager->persist($register);
            SendMail::sendRegisterationMail($register->getEmail(), $register->getActivation(), $register->getFirstName(), $register->getLastName());
            $entityManager->flush();
            $entityManager->getConnection()->commit();
            return $register->getUser_id();
        } catch (Exception $e) {
            $entityManager->getConnection()->rollback();
            $entityManager->close();
            throw $e;
        }
    }

    static public function signup2($data, $entityManager) {
        session_start();
        $register = new UserRegister();
        $entityManager->getConnection()->beginTransaction();
        try {
            $dql = "UPDATE UserRegister r set r.current_city = :cCity,r.home_city=:hCity WHERE r.user_id =:sUid";
            $query = $entityManager->createQuery($dql);
            $query->setParameters(array(
                'cCity' => $data['current_city_id'],
                'hCity' => $data['home_city_id'],
                'sUid' => $data['sign_uid']
            ));
            $query->getResult();
            $entityManager->getConnection()->commit();
            return true;
        } catch (Exception $e) {
            $entityManager->getConnection()->rollback();
            $entityManager->close();
            throw $e;
        }
    }

       static public function validate($data, $entityManager) {
        $entityManager->getConnection()->beginTransaction();
        try {
            $dql = "SELECT b FROM uses b WHERE login = ?1";
            $query = $entityManager->createQuery($dql);
            $query->setParameter(1, $data);
            return $query->getArrayResult();
        } catch (Exception $e) {
            $entityManager->getConnection()->rollback();
            $entityManager->close();
            throw $e;
        }
    }

    static public function login($data, $entityManager) {
        $entityManager->getConnection()->beginTransaction();
        try {
            $sql = "SELECT * FROM users WHERE login = '".$data['login_username']."' AND password = '".$data['login_password']."'";
                        $query = $entityManager->getConnection()->executeQuery($sql);
            $user_id = $query->fetchAll();            
            return $user_id;
        } catch (Exception $e) {
            $entityManager->getConnection()->rollback();
            $entityManager->close();
            throw $e;
        }
    }

    static public function lastLogin($user_id, $entityManager) {
        $entityManager->getConnection()->beginTransaction();
        try {
            $dql = "UPDATE UserRegister r set r.last_login = :iLastLogin WHERE r.user_id =:sUid";
            $query = $entityManager->createQuery($dql);
            $query->setParameters(array(
                'sUid' => $user_id,
                'iLastLogin' => date("l, F j, Y, g:i:s A")
            ));
            $query->getResult();
            $entityManager->getConnection()->commit();
            return true;
        } catch (Exception $e) {
            $entityManager->getConnection()->rollback();
            $entityManager->close();
            throw $e;
        }
    }
   

}
?>