<?php

class SellersModel{

    /**
     * 
     * @param Doctrine\ORM\EntityManager $entityManager
     * @param type $params
     * @throws Exception
     */
    public static function getOne($entityManager, $id) {
       
    return $entityManager->getRepository('Seller')->find($id);    
    }
    /**
     * 
     * @param Doctrine\ORM\EntityManager $entityManager
     * @param type $params
     * @throws Exception
     */
    public static function getAll($entityManager, $params) {
    
   if(!is_array($params)){
       $params = array('id_user' => $_SESSION['user']['id']);
   }else $params['id_user'] = $_SESSION['user']['id'];

    return $entityManager->getRepository('Seller')->findBy($params);    
//    return $entityManager->getRepository('Seller')->findAll();    
    }
    
    
    /**
     * 
     * @param Doctrine\ORM\EntityManager $entityManager
     * @param type $params
     * @throws Exception
     */
    public static function add($entityManager, $params) {

        $entry = new Seller();
        $entry->setIdUser($_SESSION['user']['id']);
        $entry->setName($params['name']);


        $entityManager->getConnection()->beginTransaction();
        try {
            $res = $entityManager->persist($entry);
            $entityManager->flush();
            $entityManager->getConnection()->commit();
        } catch (Exception $e) {
            $entityManager->getConnection()->rollback();
            $entityManager->close();
            throw $e;
        }
    }
   
    /**
     * 
     * @param Doctrine\ORM\EntityManager $entityManager
     * @param type $params
     * @throws Exception
     */
    public static function edit($entityManager, $params) {

        $entry = new Seller();
        $entry =$entityManager->getRepository('Seller')->find($params['id']);
        
        $entry->setName($params['name']);

       $res = $entityManager->persist($entry);
            $entityManager->flush();
    }
    /**
     * 
     * @param Doctrine\ORM\EntityManager $entityManager
     * @param type $params
     * @throws Exception
     */
    public static function remove($entityManager, $params) {

        $entry = new Seller();
        $entry =$entityManager->getRepository('Seller')->find($params['id']);       
       $res = $entityManager->remove($entry);
            $entityManager->flush();
    }
    
    

}
