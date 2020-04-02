<?php
/**
 * File for class TTransferRecord
 * @package FinconWebAPI
 * @author Fincon Information Technologies
 * @version 5247003
 * @date 2019-09-20
 */
class TTransferRecord
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
     * Constructor method for TTransferRecord
     * @see parent::__construct()
     * @param string $_itemNo
     * @param double $_quantity
     * @return TTransferRecord
     */
    public function __construct($_itemNo = NULL,$_quantity = NULL)
    {
        $this->ItemNo=$_itemNo;
        $this->Quantity=$_quantity;
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
