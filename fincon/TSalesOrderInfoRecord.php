<?php
/**
 * File for class TSalesOrderInfoRecord
 * @package FinconWebAPI
 * @author Fincon Information Technologies
 * @version 5247003
 * @date 2019-09-20
 */
class TSalesOrderInfoRecord
{
    /**
     * The AccNo
     * @var string
     */
    public $AccNo;
    /**
     * The DebName
     * @var string
     */
    public $DebName;
    /**
     * The LocNo
     * @var string
     */
    public $LocNo;
    /**
     * The OrderDate
     * @var string
     */
    public $OrderDate;
    /**
     * The DateReq
     * @var string
     */
    public $DateReq;
    /**
     * The RepCode
     * @var string
     */
    public $RepCode;
    /**
     * Constructor method for TSalesOrderInfoRecord
     * @see parent::__construct()
     * @param string $_accNo
     * @param string $_debName
     * @param string $_locNo
     * @param string $_orderDate
     * @param string $_dateReq
     * @param string $_repCode
     * @return TSalesOrderInfoRecord
     */
    public function __construct($_accNo = NULL,$_debName = NULL,$_locNo = NULL,$_orderDate = NULL,$_dateReq = NULL,$_repCode = NULL)
    {
      $this->AccNo=$_accNo;
      $this->DebName=$_debName;
      $this->LocNo=$_locNo;
      $this->OrderDate=$_orderDate;
      $this->DateReq=$_dateReq;
      $this->RepCode=$_repCode;
    }
    /**
     * Get AccNo value
     * @return string|null
     */
    public function getAccNo()
    {
        return $this->AccNo;
    }
    /**
     * Set AccNo value
     * @param string $_accNo the AccNo
     * @return string
     */
    public function setAccNo($_accNo)
    {
        return ($this->AccNo = $_accNo);
    }
    /**
     * Get DebName value
     * @return string|null
     */
    public function getDebName()
    {
        return $this->DebName;
    }
    /**
     * Set DebName value
     * @param string $_debName the DebName
     * @return string
     */
    public function setDebName($_debName)
    {
        return ($this->DebName = $_debName);
    }
    /**
     * Get LocNo value
     * @return string|null
     */
    public function getLocNo()
    {
        return $this->LocNo;
    }
    /**
     * Set LocNo value
     * @param string $_locNo the LocNo
     * @return string
     */
    public function setLocNo($_locNo)
    {
        return ($this->LocNo = $_locNo);
    }
    /**
     * Get OrderDate value
     * @return string|null
     */
    public function getOrderDate()
    {
        return $this->OrderDate;
    }
    /**
     * Set OrderDate value
     * @param string $_orderDate the OrderDate
     * @return string
     */
    public function setOrderDate($_orderDate)
    {
        return ($this->OrderDate = $_orderDate);
    }
    /**
     * Get DateReq value
     * @return string|null
     */
    public function getDateReq()
    {
        return $this->DateReq;
    }
    /**
     * Set DateReq value
     * @param string $_dateReq the DateReq
     * @return string
     */
    public function setDateReq($_dateReq)
    {
        return ($this->DateReq = $_dateReq);
    }
    /**
     * Get RepCode value
     * @return string|null
     */
    public function getRepCode()
    {
        return $this->RepCode;
    }
    /**
     * Set RepCode value
     * @param string $_repCode the RepCode
     * @return string
     */
    public function setRepCode($_repCode)
    {
        return ($this->RepCode = $_repCode);
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
