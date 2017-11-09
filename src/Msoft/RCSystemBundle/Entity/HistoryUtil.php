<?php
namespace Msoft\RCSystemBundle\Entity;

use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Description of HistoryUtil
 *
 * @author Marcel
 */
class HistoryUtil {
    //put your code here
    
    public static function setDateIn($entity){
        $session = new Session();
        $entity->setDateIn(new \DateTime(date('Y-m-d H:i:s')));
        $entity->setUserIn($session->get('user')->getId());
        return $entity;
    }
    
    public static function setUpdated($entity){
        $session = new Session();
        $entity->setDateUpdated(new \DateTime(date('Y-m-d H:i:s')));
        $entity->setUserUpdated($session->get('user')->getId());
        return $entity;
    }
    
    public static function setRemoved($entity){
        $session = new Session();
        $entity->setRemoved(new \DateTime(date('Y-m-d H:i:s')));
        $entity->setUserRemoved($session->get('user')->getId());
        return $entity;
    }
    
}
