<?php
/**
 * File for class TStockListRecord
 * @package FinconWebAPI
 * @author Fincon Information Technologies
 * @version 5247003
 * @date 2019-09-20
 */
class TStockListRecord
{
    /**
     * The ItemNo
     * @var string
     */
    public $ItemNo;
    /**
     * The ChangeDate
     * @var string
     */
    public $ChangeDate;
    /**
     * The ChangeTime
     * @var string
     */
    public $ChangeTime;
    /**
     * Constructor method for TStockListRecord
     * @see parent::__construct()
     * @param string $_itemNo
     * @param string $_changeDate
     * @param string $_changeTime
     * @return TStockListRecord
     */
    public function __construct($_itemNo = NULL,$_changeDate = NULL,$_changeTime = NULL)
    {
        $this->ItemNo=$_itemNo;
        $this->ChangeDate=$_changeDate;
        $this->ChangeTime=$_changeTime;
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
     * Get ChangeDate value
     * @return string|null
     */
    public function getChangeDate()
    {
        return $this->ChangeDate;
    }
    /**
     * Set ChangeDate value
     * @param string $_changeDate the ChangeDate
     * @return string
     */
    public function setChangeDate($_changeDate)
    {
        return ($this->ChangeDate = $_changeDate);
    }
    /**
     * Get ChangeTime value
     * @return string|null
     */
    public function getChangeTime()
    {
        return $this->ChangeTime;
    }
    /**
     * Set ChangeTime value
     * @param string $_changeTime the ChangeTime
     * @return string
     */
    public function setChangeTime($_changeTime)
    {
        return ($this->ChangeTime = $_changeTime);
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
