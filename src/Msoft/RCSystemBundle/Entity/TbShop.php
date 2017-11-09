<?php

namespace Msoft\RCSystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbShop
 */
class TbShop
{
    /**
     * @var float
     */
    private $total;

    /**
     * @var integer
     */
    private $pending;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Msoft\RCSystemBundle\Entity\TbClient
     */
    private $idClient;

    
    public function __construct() {
        $this->setTotal(0);
        $this->setPending(0);
    }

    /**
     * Set total
     *
     * @param float $total
     * @return TbShop
     */
    public function setTotal($total)
    {
        $this->total = round($total, 2);

        return $this;
    }

    /**
     * Get total
     *
     * @return float 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set pending
     *
     * @param integer $pending
     * @return TbShop
     */
    public function setPending($pending)
    {
        $this->pending = $pending;

        return $this;
    }

    /**
     * Get pending
     *
     * @return integer 
     */
    public function getPending()
    {
        return $this->pending;
    }

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
     * Set idClient
     *
     * @param \Msoft\RCSystemBundle\Entity\TbClient $idClient
     * @return TbShop
     */
    public function setIdClient(\Msoft\RCSystemBundle\Entity\TbClient $idClient = null)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return \Msoft\RCSystemBundle\Entity\TbClient 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
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
    private $updatedDate;

    /**
     * @var integer
     */
    private $updatedUser;

    /**
     * @var \DateTime
     */
    private $removed;

    /**
     * @var integer
     */
    private $removedUser;


    /**
     * Set dateIn
     *
     * @param \DateTime $dateIn
     * @return TbShop
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
     * @return TbShop
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
     * Set updatedDate
     *
     * @param \DateTime $updatedDate
     * @return TbShop
     */
    public function setUpdatedDate($updatedDate)
    {
        $this->updatedDate = $updatedDate;

        return $this;
    }

    /**
     * Get updatedDate
     *
     * @return \DateTime 
     */
    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }

    /**
     * Set updatedUser
     *
     * @param integer $updatedUser
     * @return TbShop
     */
    public function setUpdatedUser($updatedUser)
    {
        $this->updatedUser = $updatedUser;

        return $this;
    }

    /**
     * Get updatedUser
     *
     * @return integer 
     */
    public function getUpdatedUser()
    {
        return $this->updatedUser;
    }

    /**
     * Set removed
     *
     * @param \DateTime $removed
     * @return TbShop
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
     * Set removedUser
     *
     * @param integer $removedUser
     * @return TbShop
     */
    public function setRemovedUser($removedUser)
    {
        $this->removedUser = $removedUser;

        return $this;
    }

    /**
     * Get removedUser
     *
     * @return integer 
     */
    public function getRemovedUser()
    {
        return $this->removedUser;
    }
    
}
