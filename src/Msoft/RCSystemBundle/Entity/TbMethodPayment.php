<?php

namespace Msoft\RCSystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbMethodPayment
 */
class TbMethodPayment
{
    /**
     * @var integer
     */
    private $description;

    /**
     * @var integer
     */
    private $type;

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


    public function __toString() {
        return $this->getDescription().' - '.strtoupper($this->getTypeText());
    }
    
    /**
     * Set description
     *
     * @param integer $description
     * @return TbMethodPayment
     */
    public function setDescription($description)
    {
        $this->description = strtoupper($description);

        return $this;
    }

    /**
     * Get description
     *
     * @return integer 
     */
    public function getDescription()
    {
        return  strtoupper($this->description);
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return TbMethodPayment
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
     * Get type
     *
     * @return integer 
     */
    public function getTypeText()
    {
        return TbMethodPayment::getChoices()[$this->getType()];
    }

    /**
     * Set dateIn
     *
     * @param \DateTime $dateIn
     * @return TbMethodPayment
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
     * @return TbMethodPayment
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
     * @return TbMethodPayment
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
     * @return TbMethodPayment
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
     * @return TbMethodPayment
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
     * @return TbMethodPayment
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
    
    public static function  getChoices(){
        return array('1' => 'A vista','2' => 'A prazo','3' => 'Crediario','4' => 'Cheque','5' => 'Cortesia');
    }
    
}
