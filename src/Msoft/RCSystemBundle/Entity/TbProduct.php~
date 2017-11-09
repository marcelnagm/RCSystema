<?php

namespace Msoft\RCSystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TbProduct
 */
class TbProduct
{
    /**
     * @var integer
     */
    private $barcode;

    /**
     * @var string
     */
    private $info;

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
     * @var \Msoft\RCSystemBundle\Entity\TbCategory
     */
    private $idCategory;

    /**
     * @var \Msoft\RCSystemBundle\Entity\TbSubcategory
     */
    private $idSubcategory;


    public function __construct() {
        $this->setQuantity(0);
        $this->setPriceCost(0);
        $this->setPriceSell(0);
    }
    
    /**
     * Set barcode
     *
     * @param integer $barcode
     * @return TbProduct
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * Get barcode
     *
     * @return integer 
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return TbProduct
     */
    public function setInfo($info)
    {
        $this->info = strtoupper($info);

        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return TbProduct
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->setDateIn(new \DateTime(date('Y-m-d H:i:s')));
        
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
     * @return TbProduct
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
     * @return TbProduct
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
     * @return TbProduct
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
     * @return TbProduct
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
     * @return TbProduct
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
     * @return TbProduct
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
     * Set idCategory
     *
     * @param \Msoft\RCSystemBundle\Entity\TbCategory $idCategory
     * @return TbProduct
     */
    public function setIdCategory(\Msoft\RCSystemBundle\Entity\TbCategory $idCategory = null)
    {
        $this->idCategory = $idCategory;

        return $this;
    }

    /**
     * Get idCategory
     *
     * @return \Msoft\RCSystemBundle\Entity\TbCategory 
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * Set idSubcategory
     *
     * @param \Msoft\RCSystemBundle\Entity\TbSubcategory $idSubcategory
     * @return TbProduct
     */
    public function setIdSubcategory(\Msoft\RCSystemBundle\Entity\TbSubcategory $idSubcategory = null)
    {
        $this->idSubcategory = $idSubcategory;

        return $this;
    }

    /**
     * Get idSubcategory
     *
     * @return \Msoft\RCSystemBundle\Entity\TbSubcategory 
     */
    public function getIdSubcategory()
    {
        return $this->idSubcategory;
    }
    
    public function __toString() {
        return $this->getInfo().' - '.$this->getBarcode().' - '.$this->getIdCategory();
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
     * @return TbProduct
     */
    public function setPriceCost($priceCost)
    {
        $this->priceCost = str_replace(',', '.', $priceCost);

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
     * @return TbProduct
     */
    public function setPriceSell($priceSell)
    {
        $this->priceSell = str_replace(',', '.', $priceSell);

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
    
    public function getProfit(){
        return $this->getPriceSell() - $this->getPriceCost();
    }
    public function getProfitPercentage(){
        if($this->getPriceSell() == 0 || $this->getPriceCost() ==0) return 0;
        return number_format(($this->getPriceSell() * 100 / $this->getPriceCost())-100,2);    
        
        
    }
    
}
