<?php
/**
 * File for class TSerialNoRecord
 * @package FinconWebAPI
 * @author Fincon Information Technologies
 * @version 5247003
 * @date 2019-09-20
 */
class TSerialNoRecord
{
    /**
     * The SerialNo
     * @var string
     */
    public $SerialNo;
    /**
     * The ItemNo
     * @var string
     */
    public $ItemNo;
    /**
     * The InDocType
     * @var string
     */
    public $InDocType;
    /**
     * The InDocNo
     * @var string
     */
    public $InDocNo;
    /**
     * The InDocDate
     * @var string
     */
    public $InDocDate;
    /**
     * The OutDocType
     * @var string
     */
    public $OutDocType;
    /**
     * The OutDocNo
     * @var string
     */
    public $OutDocNo;
    /**
     * The OutDocDate
     * @var string
     */
    public $OutDocDate;
    /**
     * The OrderNo
     * @var string
     */
    public $OrderNo;
    /**
     * The OrderType
     * @var string
     */
    public $OrderType;
    /**
     * The GRVNo
     * @var string
     */
    public $GRVNo;
    /**
     * The SupAccNo
     * @var string
     */
    public $SupAccNo;
    /**
     * The GRVDate
     * @var string
     */
    public $GRVDate;
    /**
     * The SwopSerialNo
     * @var string
     */
    public $SwopSerialNo;
    /**
     * The StockType
     * @var string
     */
    public $StockType;
    /**
     * The Parent
     * @var string
     */
    public $Parent;
    /**
     * The Location
     * @var string
     */
    public $Location;
    /**
     * The Group
     * @var string
     */
    public $Group;
    /**
     * Constructor method for TSerialNoRecord
     * @see parent::__construct()
     * @param string $_serialNo
     * @param string $_itemNo
     * @param string $_inDocType
     * @param string $_inDocNo
     * @param string $_inDocDate
     * @param string $_outDocType
     * @param string $_outDocNo
     * @param string $_outDocDate
     * @param string $_orderNo
     * @param string $_orderType
     * @param string $_gRVNo
     * @param string $_supAccNo
     * @param string $_gRVDate
     * @param string $_swopSerialNo
     * @param string $_stockType
     * @param string $_parent
     * @param string $_location
     * @param string $_group
     * @return TSerialNoRecord
     */
    public function __construct($_serialNo = NULL,$_itemNo = NULL,$_inDocType = NULL,$_inDocNo = NULL,$_inDocDate = NULL,$_outDocType = NULL,$_outDocNo = NULL,$_outDocDate = NULL,$_orderNo = NULL,$_orderType = NULL,$_gRVNo = NULL,$_supAccNo = NULL,$_gRVDate = NULL,$_swopSerialNo = NULL,$_stockType = NULL,$_parent = NULL,$_location = NULL,$_group = NULL)
    {
      $this->SerialNo=$_serialNo;
      $this->ItemNo=$_itemNo;
      $this->InDocType=$_inDocType;
      $this->InDocNo=$_inDocNo;
      $this->InDocDate=$_inDocDate;
      $this->OutDocType=$_outDocType;
      $this->OutDocNo=$_outDocNo;
      $this->OutDocDate=$_outDocDate;
      $this->OrderNo=$_orderNo;
      $this->OrderType=$_orderType;
      $this->GRVNo=$_gRVNo;
      $this->SupAccNo=$_supAccNo;
      $this->GRVDate=$_gRVDate;
      $this->SwopSerialNo=$_swopSerialNo;
      $this->StockType=$_stockType;
      $this->Parent=$_parent;
      $this->Location=$_location;
      $this->Group=$_group;
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
     * Get InDocType value
     * @return string|null
     */
    public function getInDocType()
    {
        return $this->InDocType;
    }
    /**
     * Set InDocType value
     * @param string $_inDocType the InDocType
     * @return string
     */
    public function setInDocType($_inDocType)
    {
        return ($this->InDocType = $_inDocType);
    }
    /**
     * Get InDocNo value
     * @return string|null
     */
    public function getInDocNo()
    {
        return $this->InDocNo;
    }
    /**
     * Set InDocNo value
     * @param string $_inDocNo the InDocNo
     * @return string
     */
    public function setInDocNo($_inDocNo)
    {
        return ($this->InDocNo = $_inDocNo);
    }
    /**
     * Get InDocDate value
     * @return string|null
     */
    public function getInDocDate()
    {
        return $this->InDocDate;
    }
    /**
     * Set InDocDate value
     * @param string $_inDocDate the InDocDate
     * @return string
     */
    public function setInDocDate($_inDocDate)
    {
        return ($this->InDocDate = $_inDocDate);
    }
    /**
     * Get OutDocType value
     * @return string|null
     */
    public function getOutDocType()
    {
        return $this->OutDocType;
    }
    /**
     * Set OutDocType value
     * @param string $_outDocType the OutDocType
     * @return string
     */
    public function setOutDocType($_outDocType)
    {
        return ($this->OutDocType = $_outDocType);
    }
    /**
     * Get OutDocNo value
     * @return string|null
     */
    public function getOutDocNo()
    {
        return $this->OutDocNo;
    }
    /**
     * Set OutDocNo value
     * @param string $_outDocNo the OutDocNo
     * @return string
     */
    public function setOutDocNo($_outDocNo)
    {
        return ($this->OutDocNo = $_outDocNo);
    }
    /**
     * Get OutDocDate value
     * @return string|null
     */
    public function getOutDocDate()
    {
        return $this->OutDocDate;
    }
    /**
     * Set OutDocDate value
     * @param string $_outDocDate the OutDocDate
     * @return string
     */
    public function setOutDocDate($_outDocDate)
    {
        return ($this->OutDocDate = $_outDocDate);
    }
    /**
     * Get OrderNo value
     * @return string|null
     */
    public function getOrderNo()
    {
        return $this->OrderNo;
    }
    /**
     * Set OrderNo value
     * @param string $_orderNo the OrderNo
     * @return string
     */
    public function setOrderNo($_orderNo)
    {
        return ($this->OrderNo = $_orderNo);
    }
    /**
     * Get OrderType value
     * @return string|null
     */
    public function getOrderType()
    {
        return $this->OrderType;
    }
    /**
     * Set OrderType value
     * @param string $_orderType the OrderType
     * @return string
     */
    public function setOrderType($_orderType)
    {
        return ($this->OrderType = $_orderType);
    }
    /**
     * Get GRVNo value
     * @return string|null
     */
    public function getGRVNo()
    {
        return $this->GRVNo;
    }
    /**
     * Set GRVNo value
     * @param string $_gRVNo the GRVNo
     * @return string
     */
    public function setGRVNo($_gRVNo)
    {
        return ($this->GRVNo = $_gRVNo);
    }
    /**
     * Get SupAccNo value
     * @return string|null
     */
    public function getSupAccNo()
    {
        return $this->SupAccNo;
    }
    /**
     * Set SupAccNo value
     * @param string $_supAccNo the SupAccNo
     * @return string
     */
    public function setSupAccNo($_supAccNo)
    {
        return ($this->SupAccNo = $_supAccNo);
    }
    /**
     * Get GRVDate value
     * @return string|null
     */
    public function getGRVDate()
    {
        return $this->GRVDate;
    }
    /**
     * Set GRVDate value
     * @param string $_gRVDate the GRVDate
     * @return string
     */
    public function setGRVDate($_gRVDate)
    {
        return ($this->GRVDate = $_gRVDate);
    }
    /**
     * Get SwopSerialNo value
     * @return string|null
     */
    public function getSwopSerialNo()
    {
        return $this->SwopSerialNo;
    }
    /**
     * Set SwopSerialNo value
     * @param string $_swopSerialNo the SwopSerialNo
     * @return string
     */
    public function setSwopSerialNo($_swopSerialNo)
    {
        return ($this->SwopSerialNo = $_swopSerialNo);
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
