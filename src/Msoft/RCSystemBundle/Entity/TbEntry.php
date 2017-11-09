<?php

namespace Msoft\RCSystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbEntry
 * @ORM\Entity(repositoryClass="Msoft\RCSystemBundle\Entity\TbEntryRepository")
 */
class TbEntry
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $dateIn;

    /**
     * @var integer
     */
    private $userIn;

    /**
     * @var \DateTime
     */
    private $dateUpdated;

    /**
     * @var integer
     */
    private $userUpdated;

    /**
     * @var \DateTime
     */
    private $removed;

    /**
     * @var integer
     */
    private $userRemoved;

    /**
     * @var \Msoft\RCSystemBundle\Entity\TbDeliver
     */
    private $idDeliver;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return TbEntry
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateIn
     *
     * @param \DateTime $dateIn
     * @return TbEntry
     */
    public function setDateIn($dateIn)
    {
        $this->dateIn = $dateIn;

        return $this;
    }

    /**
     * Get dateIn
     *
     * @return \DateTime 
     */
    public function getDateIn()
    {
        return $this->dateIn;
    }

    /**
     * Set userIn
     *
     * @param integer $userIn
     * @return TbEntry
     */
    public function setUserIn($userIn)
    {
        $this->userIn = $userIn;

        return $this;
    }

    /**
     * Get userIn
     *
     * @return integer 
     */
    public function getUserIn()
    {
        return $this->userIn;
    }

    /**
     * Set dateUpdate
     *
     * @param \DateTime $dateUpdate
     * @return TbEntry
     */
    public function setDateUpdated($dateUpdate)
    {
        $this->dateUpdated = $dateUpdate;

        return $this;
    }

    /**
     * Get dateUpdate
     *
     * @return \DateTime 
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * Set userUpdate
     *
     * @param integer $userUpdate
     * @return TbEntry
     */
    public function setUserUpdated($userUpdate)
    {
        $this->userUpdated = $userUpdate;

        return $this;
    }

    /**
     * Get userUpdate
     *
     * @return integer 
     */
    public function getUserUpdated()
    {
        return $this->userUpdated;
    }

    /**
     * Set removed
     *
     * @param \DateTime $removed
     * @return TbEntry
     */
    public function setRemoved($removed)
    {
        $this->removed = $removed;

        return $this;
    }

    /**
     * Get removed
     *
     * @return \DateTime 
     */
    public function getRemoved()
    {
        return $this->removed;
    }

    /**
     * Set userRemoved
     *
     * @param integer $userRemoved
     * @return TbEntry
     */
    public function setUserRemoved($userRemoved)
    {
        $this->userRemoved = $userRemoved;

        return $this;
    }

    /**
     * Get userRemoved
     *
     * @return integer 
     */
    public function getUserRemoved()
    {
        return $this->userRemoved;
    }

    /**
     * Set idDeliver
     *
     * @param \Msoft\RCSystemBundle\Entity\TbDeliver $idDeliver
     * @return TbEntry
     */
    public function setIdDeliver(\Msoft\RCSystemBundle\Entity\TbDeliver $idDeliver = null)
    {
        $this->idDeliver = $idDeliver;

        return $this;
    }

    /**
     * Get idDeliver
     *
     * @return \Msoft\RCSystemBundle\Entity\TbDeliver 
     */
    public function getIdDeliver()
    {
        return $this->idDeliver;
    }
    
    public function __toString() {
        return $this->getDescription().' - '.$this->getIdDeliver();
    }
    
}
