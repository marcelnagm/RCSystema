<?php

require_once "bootstrap.php";

class CommentsModel {
    
     public static function addComment($entityManager,$params) {
        $entry = new Comments();
        $entry->setAuthorId($params['author_id']);
        $entry->setPostId($params['post_id']);
        $entry->setText($params['text']);
        $entry->setDate($params['date']);

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
    
    public static function getComments($post_id,$entityManager)
    {
       
        $entityManager->getConnection()->beginTransaction();
        try {
            $dql = "SELECT c.text, c.date, u.firstname, u.lastname 
                FROM Wall w,Comments c,UserRegister u
                WHERE u.user_id=w.author_id and w.id=c.post_id and c.post_id =:post order by c.date desc";
            $query = $entityManager->createQuery($dql);
            $query->setParameters(array(
                'post' => $post_id
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