<?php

namespace Msoft\RCSystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TbCart
 * @ORM\Entity(repositoryClass="Msoft\RCSystemBundle\Entity\TbCartRepository")
 */

class TbCart
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
     * @var \Msoft\RCSystemBundle\Entity\TbShop
     */
    private $idShop;

    /**
     * @var \Msoft\RCSystemBundle\Entity\TbProduct
     */
    private $idProduct;


    public function __construct() {
        $this->setQuantity('0');        
        $this->setSubtotal('0');        
    }
    
    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return TbCart
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        if($this->getIdProduct() != null)$this->setSubtotal($this->getIdProduct()->getPriceSell() * $quantity);
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
     * @return TbCart
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
     * @return TbCart
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
     * @return TbCart
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
     * @return TbCart
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
     * @return TbCart
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
     * @return TbCart
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
     * @return TbCart
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
     * Set idProduct
     *
     * @param \Msoft\RCSystemBundle\Entity\TbProduct $idProduct
     * @return TbCart
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
    
    private $subtotal;
    
    public function getSubtotal() {
        return $this->subtotal;
    }

    public function setSubtotal($subtotal) {
        $this->subtotal = round($subtotal,2);
    }

public function haveStock(){
    
    
    if($this->getQuantity() <= $this->getIdProduct()->getQuantity()){
        return true;
    }else return false;
}



}