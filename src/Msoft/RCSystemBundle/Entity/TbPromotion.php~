<?php

namespace Msoft\RCSystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbPromotion
 */
class TbPromotion
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $dtStart;

    /**
     * @var \DateTime
     */
    private $dtEnd;

    /**
     * @var float
     */
    private $pricePromotion;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Msoft\RCSystemBundle\Entity\TbProduct
     */
    private $idProduct;


    /**
     * Set description
     *
     * @param string $description
     * @return TbPromotion
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
     * Set dtStart
     *
     * @param \DateTime $dtStart
     * @return TbPromotion
     */
    public function setDtStart($dtStart)
    {
        $this->dtStart = $dtStart;

        return $this;
    }

    /**
     * Get dtStart
     *
     * @return \DateTime 
     */
    public function getDtStart()
    {
        return $this->dtStart;
    }

    /**
     * Set dtEnd
     *
     * @param \DateTime $dtEnd
     * @return TbPromotion
     */
    public function setDtEnd($dtEnd)
    {
        $this->dtEnd = $dtEnd;

        return $this;
    }

    /**
     * Get dtEnd
     *
     * @return \DateTime 
     */
    public function getDtEnd()
    {
        return $this->dtEnd;
    }

    /**
     * Set pricePromotion
     *
     * @param float $pricePromotion
     * @return TbPromotion
     */
    public function setPricePromotion($pricePromotion)
    {
        $this->pricePromotion = $pricePromotion;

        return $this;
    }

    /**
     * Get pricePromotion
     *
     * @return float 
     */
    public function getPricePromotion()
    {
        return $this->pricePromotion;
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
     * @return TbPromotion
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
}
