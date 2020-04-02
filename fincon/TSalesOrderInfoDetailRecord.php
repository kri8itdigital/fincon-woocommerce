<?php
/**
 * File for class TSalesOrderInfoDetailRecord
 * @package FinconWebAPI
 * @author Fincon Information Technologies
 * @version 5247003
 * @date 2019-09-20
 */
class TSalesOrderInfoDetailRecord
{
    /**
     * The ItemNo
     * @var string
     */
    public $ItemNo;
    /**
     * The Quantity
     * @var double
     */
    public $Quantity;
    /**
     * The PickedQuantity
     * @var double
     */
    public $PickedQuantity;
    /**
     * The SerialNo
     * @var string
     */
    public $SerialNo;
    /**
     * Constructor method for TSalesOrderInfoDetailRecord
     * @see parent::__construct()
     * @param string $_itemNo
     * @param double $_quantity
     * @param double $_pickedQuantity
     * @param string $_serialNo
     * @return TSalesOrderInfoDetailRecord
     */
    public function __construct($_itemNo = NULL,$_quantity = NULL,$_pickedQuantity = NULL,$_serialNo = NULL)
    {
        $this->ItemNo=$_itemNo;
        $this->Quantity=$_quantity;
        $this->PickedQuantity=$_pickedQuantity;
        $this->SerialNo=$_serialNo;
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
     * Get PickedQuantity value
     * @return double|null
     */
    public function getPickedQuantity()
    {
        return $this->PickedQuantity;
    }
    /**
     * Set PickedQuantity value
     * @param double $_pickedQuantity the PickedQuantity
     * @return double
     */
    public function setPickedQuantity($_pickedQuantity)
    {
        return ($this->PickedQuantity = $_pickedQuantity);
    }
    /**
     * Get SerialNo value
     * @return string|null
     */
    public function getSerialNo()
    {
        return $this->SerialNo;
    }
    /**
     * Set SerialNo value
     * @param string $_serialNo the SerialNo
     * @return string
     */
    public function setSerialNo($_serialNo)
    {
        return ($this->SerialNo = $_serialNo);
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
