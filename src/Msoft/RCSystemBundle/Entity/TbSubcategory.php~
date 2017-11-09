<?php

namespace Msoft\RCSystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbSubcategory
 */
class TbSubcategory
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Msoft\RCSystemBundle\Entity\TbCategory
     */
    private $idCategory;


    /**
     * Set description
     *
     * @param string $description
     * @return TbSubcategory
     */
    public function setDescription($description)
    {
        $this->description = strtoupper( $description);

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
     * @return TbSubcategory
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
    
    public function __toString() {
        return $this->getDescription();
    }
}
