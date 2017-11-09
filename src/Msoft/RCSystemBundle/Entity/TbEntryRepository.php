<?php
namespace Msoft\RCSystemBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TbEntryRepository extends EntityRepository {
    //put your code here
    public function findByIdEntry($id){
        $em = $this->getEntityManager();
        $criteria = array('idEntry' => $id);
        return $em->getRepository('MsoftRCSystemBundle:TbStock')->findBy($criteria);
}
    
}
