<?php

namespace Msoft\RCSystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbStock
 */
class TbStock
{
    /**
     * @var integer
     */
    private $quantity;

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
     * @var \Msoft\RCSystemBundle\Entity\TbProduct
     */
    private $idProduct;


    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return TbStock
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set dateIn
     *
     * @param \DateTime $dateIn
     * @return TbStock
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
     * @return TbStock
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
     * @return TbStock
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
     * @return TbStock
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
     * @return TbStock
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
     * @return TbStock
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
     * Set idProduct
     *
     * @param \Msoft\RCSystemBundle\Entity\TbProduct $idProduct
     * @return TbStock
     */
    public function setIdProduct(\Msoft\RCSystemBundle\Entity\TbProduct $idProduct = null)
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    /**
     * Get idProduct
     *
     * @return \Msoft\RCSystemBundle\Entity\TbProduct 
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }
    /**
     * @var \Msoft\RCSystemBundle\Entity\TbEntry
     */
    private $idEntry;


    /**
     * Set idEntry
     *
     * @param \Msoft\RCSystemBundle\Entity\TbEntry $idEntry
     * @return TbStock
     */
    public function setIdEntry(\Msoft\RCSystemBundle\Entity\TbEntry $idEntry = null)
    {
        $this->idEntry = $idEntry;

        return $this;
    }

    /**
     * Get idEntry
     *
     * @return \Msoft\RCSystemBundle\Entity\TbEntry 
     */
    public function getIdEntry()
    {
        return $this->idEntry;
    }
    /**
     * @var float
     */
    private $priceCost;

    /**
     * @var float
     */
    private $priceSell;


    /**
     * Set priceCost
     *
     * @param float $priceCost
     * @return TbStock
     */
    public function setPriceCost($priceCost)
    {
        $this->priceCost = round(str_replace(',', '.', $priceCost),2);

        return $this;
    }

    /**
     * Get priceCost
     *
     * @return float 
     */
    public function getPriceCost()
    {
        return $this->priceCost;
    }

    /**
     * Set priceSell
     *
     * @param float $priceSell
     * @return TbStock
     */
    public function setPriceSell($priceSell)
    {
        $this->priceSell = round(str_replace(',', '.', $priceSell),2);

        return $this;
    }

    /**
     * Get priceSell
     *
     * @return float 
     */
    public function getPriceSell()
    {
        return $this->priceSell;
    }
}
