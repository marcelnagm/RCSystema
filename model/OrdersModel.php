<?php

class OrdersModel {

    /**
     * 
     * @param Doctrine\ORM\EntityManager $entityManager
     * @param type $params
     * @return Order Description 
     * @throws Exception
     */
    public static function getOne($entityManager, $params) {
        
        return $entityManager->getRepository('Order')->findOneBy($params);
        
    }

    /**
     * 
     * @param Doctrine\ORM\EntityManager $entityManager
     * @param type $params
     * @throws Exception
     */
    public static function getAll($entityManager, $params) {

        $session = new Session();

        if (!is_array($params)) {
            $params = array('id_user' => $_SESSION['user']['id']);
        } else
            $params['id_user'] = $_SESSION['user']['id'];

        if ($session->getSession('filter_orders') != '') {
            if ($session->getSession('filter_orders') == 'lib') {
                $sql = "SELECT u FROM Order u where u.id_user = " . $params['id_user'] . " AND u.date_distribuition_out = '00-00-0000 00:00' AND u.date_store_out = '00-00-0000 00:00' AND u.delivered = '00-00-0000 00:00'  ";
                $q = $entityManager->createQuery($sql);
                return $q->getResult();
            }
            if ($session->getSession('filter_orders') == 'ent') {
                $sql = "SELECT u FROM Order u where u.id_user = " . $params['id_user'] . " AND u.date_distribuition_out <> '00-00-0000 00:00' AND u.date_store_out <> '00-00-0000 00:00' AND u.delivered = '00-00-0000 00:00'  ";
                $q = $entityManager->createQuery($sql);
                return $q->getResult();
            }
        }
        $sql = "SELECT u FROM Order u where u.id_user = " . $params['id_user'] . " AND ((u.date_distribuition_out <> '00-00-0000 00:00' AND u.delivered = '00-00-0000 00:00') OR (u.date_store_out = '00-00-0000 00:00'))";
        $q = $entityManager->createQuery($sql);
        return $q->getResult();
    }

    /**
     * 
     * @param Doctrine\ORM\EntityManager $entityManager
     * @param type $params
     * @throws Exception
     */
    public static function add($entityManager, $params) {

        $entry = new Order();
        
        $criteria = array('id_order' => $params['id_order']);
         if(!is_numeric($params['id_order'])){
        $session = new Session();
        $session->setSession('error_order_insert', 'Erro, Ordem de serviço deve ser um numero nao = '.$params['id_order']);
        return ;
        }
        if(count ($entityManager->getRepository('Order')->findBy($criteria))==1){
        $session = new Session();
        $session->setSession('error_order_insert', 'Erro, Ordem de serviço já presente com numero - '.$params['id_order']);
        return ;
        }
       
        
        
        $entry->setIdUser($_SESSION['user']['id']);
        $entry->setIdOrder($params['id_order']);
        $entry->setIdSeller($params['id_seller']);
        $entry->setClient($params['client']);
        $entry->setLens($params['lens']);
        $entry->setFrame($params['frame']);
        $entry->setExpectedDate($params['expected_date']);


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
    public static function setDelivered($entityManager, $params) {

        $entry = new Order();
        $entry = $entityManager->getRepository('Order')->find($params['id']);

        $entry->setDelivered(date('Y-m-d H:i:s'));

        $res = $entityManager->persist($entry);
        $entityManager->flush();
    }

    /**
     * 
     * @param Doctrine\ORM\EntityManager $entityManager
     * @param type $params
     * @throws Exception
     */
    public static function setStoreOut($entityManager, $params) {

        $entry = new Order();
        $entry = $entityManager->getRepository('Order')->find($params['id']);

        $entry->setDateStoreOut(date('Y-m-d H:i:s'));

        $res = $entityManager->persist($entry);
        $entityManager->flush();
    }

    /**
     * 
     * @param Doctrine\ORM\EntityManager $entityManager
     * @param type $params
     * @throws Exception
     */
    public static function edit($entityManager, $params) {

        
        $entry = $entityManager->getRepository('Order')->find($params['id']);
//        $entry = new Order();
        $entry->setIdOrder($params['id_order']);
        $entry->setIdSeller($params['id_seller']);
        $entry->setExpectedDate($params['expected_date']);
        $entry->setClient($params['client']);
        $entry->setLens($params['lens']);
        $entry->setFrame($params['frame']);

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
        $entry = $entityManager->getRepository('Seller')->find($params['id']);
        $res = $entityManager->remove($entry);
        $entityManager->flush();
    }

}
