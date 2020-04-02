<?php
/**
 * File for class TProdOrderInfoRecord
 * @package FinconWebAPI
 * @author Fincon Information Technologies
 * @version 5247003
 * @date 2019-09-20
 */
class TProdOrderInfoRecord
{
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
     * The ProdDate
     * @var string
     */
    public $ProdDate;
    /**
     * The Remark
     * @var string
     */
    public $Remark;
    /**
     * Constructor method for TProdOrderInfoRecord
     * @see parent::__construct()
     * @param string $_locNo
     * @param string $_orderDate
     * @param string $_prodDate
     * @param string $_remark
     * @return TProdOrderInfoRecord
     */
    public function __construct($_locNo = NULL,$_orderDate = NULL,$_prodDate = NULL,$_remark = NULLs)
    {
      $this->LocNo=$_locNo;
      $this->OrderDate=$_orderDate;
      $this->ProdDate=$_prodDate;
      $this->Remark=$_remark;
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
     * Get ProdDate value
     * @return string|null
     */
    public function getProdDate()
    {
        return $this->ProdDate;
    }
    /**
     * Set ProdDate value
     * @param string $_prodDate the ProdDate
     * @return string
     */
    public function setProdDate($_prodDate)
    {
        return ($this->ProdDate = $_prodDate);
    }
    /**
     * Get Remark value
     * @return string|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param string $_remark the Remark
     * @return string
     */
    public function setRemark($_remark)
    {
        return ($this->Remark = $_remark);
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
