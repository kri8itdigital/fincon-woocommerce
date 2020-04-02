<?php
/**
 * File for class TProdOrderInfoDetailRecord
 * @package FinconWebAPI
 * @author Fincon Information Technologies
 * @version 5247003
 * @date 2019-09-20
 */
class TProdOrderInfoDetailRecord
{
    /**
     * The ItemNo
     * @var string
     */
    public $ItemNo;
    /**
     * The Description
     * @var string
     */
    public $Description;
    /**
     * The Quantity
     * @var double
     */
    public $Quantity;
    /**
     * The SalesOrderNo
     * @var string
     */
    public $SalesOrderNo;
    /**
     * Constructor method for TProdOrderInfoDetailRecord
     * @see parent::__construct()
     * @param string $_itemNo
     * @param string $_description
     * @param double $_quantity
     * @param string $_salesOrderNo
     * @return TProdOrderInfoDetailRecord
     */
    public function __construct($_itemNo = NULL,$_description = NULL,$_quantity = NULL,$_salesOrderNo = NULL)
    {
        $this->ItemNo=$_itemNo;
        $this->Description=$_description;
        $this->Quantity=$_quantity;
        $this->SalesOrderNo=$_salesOrderNo;
    }
    /**
     * Get ItemNo value
     * @return string|null
     */
    public function getItemNo()
    {
        return $this->ItemNo;
    }
    /**
     * Set ItemNo value
     * @param string $_itemNo the ItemNo
     * @return string
     */
    public function setItemNo($_itemNo)
    {
        return ($this->ItemNo = $_itemNo);
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $_description the Description
     * @return string
     */
    public function setDescription($_description)
    {
        return ($this->Description = $_description);
    }
    /**
     * Get Quantity value
     * @return double|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param double $_quantity the Quantity
     * @return double
     */
    public function setQuantity($_quantity)
    {
        return ($this->Quantity = $_quantity);
    }
    /**
     * Get SalesOrderNo value
     * @return string|null
     */
    public function getSalesOrderNo()
    {
        return $this->SalesOrderNo;
    }
    /**
     * Set SalesOrderNo value
     * @param string $_salesOrderNo the SalesOrderNo
     * @return string
     */
    public function setSalesOrderNo($_salesOrderNo)
    {
        return ($this->SalesOrderNo = $_salesOrderNo);
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
