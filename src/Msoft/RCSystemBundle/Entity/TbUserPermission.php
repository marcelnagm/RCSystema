<?php

namespace Msoft\RCSystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbUserPermission
 */
class TbUserPermission
{
    /**
     * @var string
     */
    private $module;

    /**
     * @var string
     */
    private $permission;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Msoft\RCSystemBundle\Entity\TbUser
     */
    private $idUser;


    /**
     * Set module
     *
     * @param string $module
     * @return TbUserPermission
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set permission
     *
     * @param string $permission
     * @return TbUserPermission
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get permission
     *
     * @return string 
     */
    public function getPermission()
    {
        return $this->permission;
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
     * Set idUser
     *
     * @param \Msoft\RCSystemBundle\Entity\TbUser $idUser
     * @return TbUserPermission
     */
    public function setIdUser(\Msoft\RCSystemBundle\Entity\TbUser $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \Msoft\RCSystemBundle\Entity\TbUser 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
