<?php

namespace Msoft\RCSystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbInstallment
 */
class TbInstallment
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $value;

    /**
     * @var float
     */
    private $value_paid;

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
     * @var \Msoft\RCSystemBundle\Entity\TbClient
     */
    private $idClient;

    /**
     * @var \Msoft\RCSystemBundle\Entity\TbPayment
     */
    private $idPayment;

    public function __construct() {
        $this->setValue(0);
        $this->setValuePaid('0');
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
     * Set value
     *
     * @param float $value
     * @return TbInstallment
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
     * Set value_paid
     *
     * @param float $valuePaid
     * @return TbInstallment
     */
    public function setValuePaid($valuePaid)
    {
        $this->value_paid = str_replace(',', '.', $valuePaid);

        return $this;
    }

    /**
     * Get value_paid
     *
     * @return float 
     */
    public function getValuePaid()
    {
        return $this->value_paid;
    }

    /**
     * Set dateIn
     *
     * @param \DateTime $dateIn
     * @return TbInstallment
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
     * @return TbInstallment
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
     * @return TbInstallment
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
     * @return TbInstallment
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
     * @return TbInstallment
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
     * @return TbInstallment
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
     * Set idClient
     *
     * @param \Msoft\RCSystemBundle\Entity\TbClient $idClient
     * @return TbInstallment
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
     * Set idPayment
     *
     * @param \Msoft\RCSystemBundle\Entity\TbPayment $idPayment
     * @return TbInstallment
     */
    public function setIdPayment(\Msoft\RCSystemBundle\Entity\TbPayment $idPayment = null)
    {
        $this->idPayment = $idPayment;

        return $this;
    }

    /**
     * Get idPayment
     *
     * @return \Msoft\RCSystemBundle\Entity\TbPayment 
     */
    public function getIdPayment()
    {
        return $this->idPayment;
    }
    /**
     * @var integer
     */
    private $type;


    /**
     * Set type
     *
     * @param integer $type
     * @return TbInstallment
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @var float
     */
    private $valuePaid;

    /**
     * @var \DateTime
     */
    private $dueDate;


    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     * @return TbInstallment
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime 
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }
}
