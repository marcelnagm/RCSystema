<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity(repositoryClass="GenericRepository") @Table(name="seller")
 */
class Seller
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var string
     */
    protected $id;

    /**
     * @Column(type="integer")
     * @var string
     */
    protected $id_user;
    
    /**
     * @Column(type="string")
     * @var string
     */
    protected $name;

    public function getId() {
        return $this->id;
    }

    public function getIdUser() {
        return $this->id_user;
    }

    public function getName() {
        return $this->name;
    }


    public function setIdUser($id_user) {
        $this->id_user = $id_user;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function __toString() {
        return $this->getName();
    }
   
}
