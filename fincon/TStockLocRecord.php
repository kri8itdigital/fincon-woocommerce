<?php
/**
 * File for class TStockLocRecord
 * @package FinconWebAPI
 * @author Fincon Information Technologies
 * @version 5247003
 * @date 2019-09-20
 */
class TStockLocRecord
{
    /**
     * The InStock
     * @var double
     */
    public $InStock;
    /**
     * The SalesOrders
     * @var double
     */
    public $SalesOrders;
    /**
     * The PurchaseOrders
     * @var double
     */
    public $PurchaseOrders;
    /**
     * The FaultyStock
     * @var double
     */
    public $FaultyStock;
    /**
     * The SwopoutStock
     * @var double
     */
    public $SwopoutStock;
    /**
     * The SupplierStock
     * @var double
     */
    public $SupplierStock;
    /**
     * Constructor method for TStockLocRecord
     * @see parent::__construct()
     * @param double $_inStock
     * @param double $_salesOrders
     * @param double $_purchaseOrders
     * @param double $_faultyStock
     * @param double $_swopoutStock
     * @param double $_supplierStock
     * @return TStockLocRecord
     */
    public function __construct($_inStock = NULL,$_salesOrders = NULL,$_purchaseOrders = NULL,$_faultyStock = NULL,$_swopoutStock = NULL,$_supplierStock = NULL)
    {
        $this->InStock=$_inStock;
        $this->SalesOrders=$_salesOrders;
        $this->PurchaseOrders=$_purchaseOrders;
        $this->FaultyStock=$_faultyStock;
        $this->SwopoutStock=$_swopoutStock;
        $this->SupplierStock=$_supplierStock;
    }
    /**
     * Get InStock value
     * @return double|null
     */
    public function getInStock()
    {
        return $this->InStock;
    }
    /**
     * Set InStock value
     * @param double $_inStock the InStock
     * @return double
     */
    public function setInStock($_inStock)
    {
        return ($this->InStock = $_inStock);
    }
    /**
     * Get SalesOrders value
     * @return double|null
     */
    public function getSalesOrders()
    {
        return $this->SalesOrders;
    }
    /**
     * Set SalesOrders value
     * @param double $_salesOrders the SalesOrders
     * @return double
     */
    public function setSalesOrders($_salesOrders)
    {
        return ($this->SalesOrders = $_salesOrders);
    }
    /**
     * Get PurchaseOrders value
     * @return double|null
     */
    public function getPurchaseOrders()
    {
        return $this->PurchaseOrders;
    }
    /**
     * Set PurchaseOrders value
     * @param double $_purchaseOrders the PurchaseOrders
     * @return double
     */
    public function setPurchaseOrders($_purchaseOrders)
    {
        return ($this->PurchaseOrders = $_purchaseOrders);
    }
    /**
     * Get FaultyStock value
     * @return double|null
     */
    public function getFaultyStock()
    {
        return $this->FaultyStock;
    }
    /**
     * Set FaultyStock value
     * @param double $_faultyStock the FaultyStock
     * @return double
     */
    public function setFaultyStock($_faultyStock)
    {
        return ($this->FaultyStock = $_faultyStock);
    }
    /**
     * Get SwopoutStock value
     * @return double|null
     */
    public function getSwopoutStock()
    {
        return $this->SwopoutStock;
    }
    /**
     * Set SwopoutStock value
     * @param double $_swopoutStock the SwopoutStock
     * @return double
     */
    public function setSwopoutStock($_swopoutStock)
    {
        return ($this->SwopoutStock = $_swopoutStock);
    }
    /**
     * Get SupplierStock value
     * @return double|null
     */
    public function getSupplierStock()
    {
        return $this->SupplierStock;
    }
    /**
     * Set SupplierStock value
     * @param double $_supplierStock the SupplierStock
     * @return double
     */
    public function setSupplierStock($_supplierStock)
    {
        return ($this->SupplierStock = $_supplierStock);
    }

    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
