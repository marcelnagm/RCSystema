<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity(repositoryClass="GenericRepository") @Table(name="orders")
 */
class Order
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var string
     */
    protected $id;
    /**
     * @Column(type="integer")
     * @var string
     */
    protected $id_order;
    /**
     * @Column(type="integer")
     * @var string
     */
    protected $id_user;
    /**
     * @Column(type="integer")
     * @var string
     */
    protected $id_seller;
    
    /**
     * @Column(type="string")
     * @var string
     */
    protected $date;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $expected_date;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $client;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $lens;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $frame;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $date_store_out;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $date_laboratory_in;
    /**
     * @Column(type="integer")
     * @var string
     */
    protected $order_out;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $date_order_out;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $date_expected_lens;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $lens_made;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $date_laboratory_out;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $date_mount_in;
    /**
     * @Column(type="integer")
     * @var string
     */
    protected $done;
      /**
     * @Column(type="string")
     * @var string
     */
    protected $obs;
      /**
     * @Column(type="string")
     * @var string
     */
    protected $date_mount_out;
      /**
     * @Column(type="string")
     * @var string
     */
    protected $date_distribuition_in;
      /**
     * @Column(type="string")
     * @var string
     */
    protected $date_distribuition_out;
      /**
     * @Column(type="integer")
     * @var string
     */
    protected $priority;   
       /**
     * @Column(type="string")
     * @var string
     */
    protected $delivered;
  
        public function getId() {
        return $this->id;
    }

        public function getIdOrder() {
        return $this->id_order;
    }

    
    public function getIdUser() {
        return $this->id_user;
    }

    public function getIdSeller() {
        return $this->id_seller;
    }

    public function getDate() {
        return $this->date;
    }

    public function getExpectedDate() {
        return $this->expected_date;
    }

    public function getClient() {
        return strtoupper($this->client);
    }

    public function getLens() {
        return strtoupper($this->lens);
    }

    public function getFrame() {
        return strtoupper($this->frame);
    }

    public function getDateLaboratoryIn() {
        return $this->date_laboratory_in;
    }

    public function getOrderOut() {
        return $this->order_out;
    }

    public function getDateOrderOut() {
        return $this->date_order_out;
    }

    public function getDateExpectedLens() {
        return $this->date_expected_lens;
    }

    public function getLensMade() {
        return $this->lens_made;
    }

    public function getDateLaboratoryOut() {
        return $this->date_laboratory_out;
    }

    public function getDateMountIn() {
        return $this->date_mount_in;
    }

    public function getDone() {
        return $this->done;
    }

    public function getObs() {
        return $this->obs;
    }

    public function getDateMountOut() {
        return $this->date_mount_out;
    }

    public function getDateDistribuitionIn() {
        return $this->date_distribuition_in;
    }

    public function getDateDistribuitionOut() {
        return $this->date_distribuition_out;
    }

    public function getPriority() {
        return $this->priority;
    }
    
    public function getDelivered() {
        return $this->delivered;
    }

    public function setDelivered($delivered) {
        $this->delivered = $delivered;
    }

    public function getDateStoreOut() {
        return $this->date_store_out;
    }

    public function setDateStoreOut($date_store_out) {
        $this->date_store_out = $date_store_out;
    }

        
     public function setIdOrder($id_order) {
        $this->id_order = $id_order;
    }


    public function setIdUser($id_user) {
        $this->id_user = $id_user;
    }

    public function setIdSeller($id_seller) {
        $this->id_seller = $id_seller;
    }

    public function setDate() {
        $this->date = date('Y-m-d H:i:s');;
    }

    public function setExpectedDate($expected_date) {
        $this->expected_date = $expected_date;
    }

    public function setClient($client) {
        $this->client = $client;
    }

    public function setLens($lens) {
        $this->lens = $lens;
    }

    public function setFrame($frame) {
        $this->frame = $frame;
    }

    public function setDateLaboratoryIn($date_laboratory_in) {
        $this->date_laboratory_in = $date_laboratory_in;
    }

    public function setOrderOut($order_out) {
        $this->order_out = $order_out;
    }

    public function setDateOrderOut($date_order_out) {
        $this->date_order_out = $date_order_out;
    }

    public function setDateExpectedLens($date_expected_lens) {
        $this->date_expected_lens = $date_expected_lens;
    }

    public function setLensMade($lens_made) {
        $this->lens_made = $lens_made;
    }

    public function setDateLaboratoryOut($date_laboratory_out) {
        $this->date_laboratory_out = $date_laboratory_out;
    }

    public function setDateMountIn($date_mount_in) {
        $this->date_mount_in = $date_mount_in;
    }

    public function setDone($done) {
        $this->done = $done;
    }

    public function setObs($obs) {
        $this->obs = $obs;
    }

    public function setDateMountOut($date_mount_out) {
        $this->date_mount_out = $date_mount_out;
    }

    public function setDateDistribuitionIn($date_distribuition_in) {
        $this->date_distribuition_in = $date_distribuition_in;
    }

    public function setDateDistribuitionOut($date_distribuition_out) {
        $this->date_distribuition_out = $date_distribuition_out;
    }

    public function setPriority($priority) {
        $this->priority = $priority;
    }

    public function __construct() {
                
        $this->setDate();
        $this->setDateLaboratoryIn('00-00-0000 00:00');
        $this->setOrderOut('0');
        $this->setDateStoreOut('00-00-0000 00:00');
        $this->setDateOrderOut('00-00-0000 00:00');
        $this->setDateExpectedLens('00-00-0000 00:00');        
        $this->setLensMade('');
        $this->setDateLaboratoryOut('00-00-0000 00:00');
        $this->setDateMountIn('00-00-0000 00:00');
        $this->setDone('0');
        $this->setObs('');        
        $this->setDateMountOut('00-00-0000 00:00');
        $this->setDateDistribuitionIn('00-00-0000 00:00');
        $this->setDateDistribuitionOut('00-00-0000 00:00');
        $this->setPriority('0');
        $this->setDelivered('00-00-0000 00:00');
    }
    
    
   
}
