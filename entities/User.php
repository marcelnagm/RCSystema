<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * * @Entity(repositoryClass="GenericRepository") @Table(name="users")
 */
class User{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var string
     */
    protected $id;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $name;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $login;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $password;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $permission;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPermission() {
        return $this->permission;
    }

    public function setPermission($permission) {
        $this->permission = $permission;
    }


}
