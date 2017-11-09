<?php

namespace Proxies\__CG__\Msoft\RCSystemBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TbProductPrice extends \Msoft\RCSystemBundle\Entity\TbProductPrice implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'priceCost', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'priceSell', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'dateIn', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'userIn', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'dateUpdated', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'userUpdated', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'removed', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'userRemoved', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'id', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'idProduct');
        }

        return array('__isInitialized__', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'priceCost', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'priceSell', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'dateIn', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'userIn', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'dateUpdated', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'userUpdated', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'removed', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'userRemoved', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'id', '' . "\0" . 'Msoft\\RCSystemBundle\\Entity\\TbProductPrice' . "\0" . 'idProduct');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TbProductPrice $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setPriceCost($priceCost)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriceCost', array($priceCost));

        return parent::setPriceCost($priceCost);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriceCost()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriceCost', array());

        return parent::getPriceCost();
    }

    /**
     * {@inheritDoc}
     */
    public function setPriceSell($priceSell)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriceSell', array($priceSell));

        return parent::setPriceSell($priceSell);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriceSell()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriceSell', array());

        return parent::getPriceSell();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateIn($dateIn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateIn', array($dateIn));

        return parent::setDateIn($dateIn);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateIn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateIn', array());

        return parent::getDateIn();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserIn($userIn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserIn', array($userIn));

        return parent::setUserIn($userIn);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIn', array());

        return parent::getUserIn();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateUpdated($dateUpdated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateUpdated', array($dateUpdated));

        return parent::setDateUpdated($dateUpdated);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateUpdated', array());

        return parent::getDateUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserUpdated($userUpdated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserUpdated', array($userUpdated));

        return parent::setUserUpdated($userUpdated);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserUpdated', array());

        return parent::getUserUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setRemoved($removed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRemoved', array($removed));

        return parent::setRemoved($removed);
    }

    /**
     * {@inheritDoc}
     */
    public function getRemoved()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRemoved', array());

        return parent::getRemoved();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserRemoved($userRemoved)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserRemoved', array($userRemoved));

        return parent::setUserRemoved($userRemoved);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserRemoved()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserRemoved', array());

        return parent::getUserRemoved();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdProduct(\Msoft\RCSystemBundle\Entity\TbProduct $idProduct = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdProduct', array($idProduct));

        return parent::setIdProduct($idProduct);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdProduct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdProduct', array());

        return parent::getIdProduct();
    }

}