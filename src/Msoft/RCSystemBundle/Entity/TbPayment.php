<?php

namespace Msoft\RCSystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Msoft\RCSystemBundle\Entity\Configurator;

/**
 * TbPayment
 */
class TbPayment
{
    /**
     * @var float
     */
    private $value;

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
     * @var integer
     */
    private $id;

    /**
     * @var \Msoft\RCSystemBundle\Entity\TbShop
     */
    private $idShop;

    /**
     * @var \Msoft\RCSystemBundle\Entity\TbClient
     */
    private $idClient;

    /**
     * @var \Msoft\RCSystemBundle\Entity\TbMethodPayment
     */
    private $idMethod;

    public function __construct($data =null) {
        if($data !=null)Configurator::configure($this, $data);
    }

    /**
     * Set value
     *
     * @param float $value
     * @return TbPayment
     */
    public function setValue($value)
    {
        $this->value = str_replace(',', '.', $value);

        return $this;
    }

    /**
     * Get value
     *
     * @return float 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set dateIn
     *
     * @param \DateTime $dateIn
     * @return TbPayment
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
     * @return TbPayment
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
     * Set dateUpdated
     *
     * @param \DateTime $dateUpdated
     * @return TbPayment
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    /**
     * Get dateUpdated
     *
     * @return \DateTime 
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * Set userUpdated
     *
     * @param integer $userUpdated
     * @return TbPayment
     */
    public function setUserUpdated($userUpdated)
    {
        $this->userUpdated = $userUpdated;

        return $this;
    }

    /**
     * Get userUpdated
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
     * @return TbPayment
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
     * @return TbPayment
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idShop
     *
     * @param \Msoft\RCSystemBundle\Entity\TbShop $idShop
     * @return TbPayment
     */
    public function setIdShop(\Msoft\RCSystemBundle\Entity\TbShop $idShop = null)
    {
        $this->idShop = $idShop;

        return $this;
    }

    /**
     * Get idShop
     *
     * @return \Msoft\RCSystemBundle\Entity\TbShop 
     */
    public function getIdShop()
    {
        return $this->idShop;
    }

    /**
     * Set idClient
     *
     * @param \Msoft\RCSystemBundle\Entity\TbClient $idClient
     * @return TbPayment
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
     * Set idMethod
     *
     * @param \Msoft\RCSystemBundle\Entity\TbMethodPayment $idMethod
     * @return TbPayment
     */
    public function setIdMethod(\Msoft\RCSystemBundle\Entity\TbMethodPayment $idMethod = null)
    {
        $this->idMethod = $idMethod;

        return $this;
    }

    /**
     * Get idMethod
     *
     * @return \Msoft\RCSystemBundle\Entity\TbMethodPayment 
     */
    public function getIdMethod()
    {
        return $this->idMethod;
    }
}
