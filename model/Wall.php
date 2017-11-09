<?php

require_once "bootstrap.php";

class WallModel {

    public static function addWallEntry($entityManager,$params) {
        $entry = new Wall();
        $entry->setAuthorId($params['author_id']);
        $entry->setOwnerId($params['owner_id']);
        $entry->setText($params['text']);

        $entry->setLink($params['link']);
        $entry->setLinkDescription($params['link_description']);
        $entry->setLinkPhoto($params['link_photo']);
        $entry->setLinkTitle($params['link_title']);
        $entry->setDate($params['date']);

        $entityManager->getConnection()->beginTransaction();
        try {
            $res = $entityManager->persist($entry);
            $entityManager->flush();
            $entityManager->getConnection()->commit();
            return $entry->getId();
            
        } catch (Exception $e) {
            $entityManager->getConnection()->rollback();
            $entityManager->close();
            throw $e;
        }
    }
    
    public static function getEntries($entityManager,$user_id=false) {
        if(!$user_id)
        {
            $user_id=$_SESSION['userid'];
        }
        $entityManager->getConnection()->beginTransaction();
        try {
            $dql = "SELECT w.id,w.text,w.link,w.link_title,w.link_description,w.link_photo,w.date,u.firstname, u.lastname FROM Wall w join UserRegister u WHERE u.user_id=w.author_id and w.owner_id =:owner order by w.date desc";
            $query = $entityManager->createQuery($dql);
            $query->setParameters(array(
                'owner' => $user_id
            ));
             return $query->getArrayResult();
        } catch (Exception $e) {
            $entityManager->getConnection()->rollback();
            $entityManager->close();
            var_dump($e->getMessage());
            throw $e;
        }
        
    }

}
