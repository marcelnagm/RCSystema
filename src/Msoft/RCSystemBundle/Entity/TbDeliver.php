<?php

namespace Msoft\RCSystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbDeliver
 */
class TbDeliver
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
     * @var integer
     */
    private $documentNumber;

    /**
     * @var string
     */
    private $contact;

    /**
     * @var string
     */
    private $location;


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
     * @return TbDeliver
     */
    public function setDescription($description)
    {
        $this->description = strtoupper($description);

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
     * Set documentNumber
     *
     * @param integer $documentNumber
     * @return TbDeliver
     */
    public function setDocumentNumber($documentNumber)
    {
        $this->documentNumber = $documentNumber;

        return $this;
    }

    /**
     * Get documentNumber
     *
     * @return integer 
     */
    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }

    /**
     * Set contact
     *
     * @param string $contact
     * @return TbDeliver
     */
    public function setContact($contact)
    {
        $this->contact = strtoupper($contact);

        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return TbDeliver
     */
    public function setLocation($location)
    {
        $this->location = strtoupper($location);

        return $this;
    }
    
 
    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }
    
      
    public function __toString() {
        return $this->getDescription(). ' - '.$this->getDocumentNumber();
    }

}
