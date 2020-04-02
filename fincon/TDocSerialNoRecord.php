<?php
/**
 * File for class TDocSerialNoRecord
 * @package FinconWebAPI
 * @subpackage
 * @author Fincon Information Technologies
 * @version 5247003
 * @date 2019-09-20
 */
class TDocSerialNoRecord
{
    /**
     * The ItemNo
     * @var string
     */
    public $ItemNo;
    /**
     * The SerialNo
     * @var string
     */
    public $SerialNo;
    /**
     * The Parent
     * @var string
     */
    public $Parent;
    /**
     * The Group
     * @var string
     */
    public $Group;
    /**
     * The StockType
     * @var string
     */
    public $StockType;
    /**
     * The Location
     * @var string
     */
    public $Location;
    /**
     * Constructor method for TDocSerialNoRecord
     * @see parent::__construct()
     * @param string $_itemNo
     * @param string $_serialNo
     * @param string $_parent
     * @param string $_group
     * @param string $_stockType
     * @param string $_location
     * @return TDocSerialNoRecord
     */
    public function __construct($_itemNo = NULL,$_serialNo = NULL,$_parent = NULL,$_group = NULL,$_stockType = NULL,$_location = NULL)
    {
      $this->ItemNo=$_itemNo;
      $this->SerialNo=$_serialNo;
      $this->Parent=$_parent;
      $this->Group=$_group;
      $this->StockType=$_stockType;
      $this->Location=$_location;
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
    /**
     * Get Parent value
     * @return string|null
     */
    public function getParent()
    {
        return $this->Parent;
    }
    /**
     * Set Parent value
     * @param string $_parent the Parent
     * @return string
     */
    public function setParent($_parent)
    {
        return ($this->Parent = $_parent);
    }
    /**
     * Get Group value
     * @return string|null
     */
    public function getGroup()
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param string $_group the Group
     * @return string
     */
    public function setGroup($_group)
    {
        return ($this->Group = $_group);
    }
    /**
     * Get StockType value
     * @return string|null
     */
    public function getStockType()
    {
        return $this->StockType;
    }
    /**
     * Set StockType value
     * @param string $_stockType the StockType
     * @return string
     */
    public function setStockType($_stockType)
    {
        return ($this->StockType = $_stockType);
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $_location the Location
     * @return string
     */
    public function setLocation($_location)
    {
        return ($this->Location = $_location);
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
