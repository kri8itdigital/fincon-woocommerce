<?php
/**
 * File for class TAccountListRecord
 * @package FinconWebAPI
 * @author Fincon Information Technologies
 * @version 5247003
 * @date 2019-09-20
 */

class TAccountListRecord
{
    /**
     * The AccNo
     * @var string
     */
    public $AccNo;
    /**
     * The AccType
     * @var string
     */
    public $AccType;
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
     * Constructor method for TAccountListRecord
     * @see parent::__construct()
     * @param string $_accNo
     * @param string $_accType
     * @param string $_changeDate
     * @param string $_changeTime
     * @return TAccountListRecord
     */
    public function __construct($_accNo = NULL,$_accType = NULL,$_changeDate = NULL,$_changeTime = NULL)
    {
      $this->AccNo=$_accNo;
      $this->AccType=$_accType;
      $this->ChangeDate=$_changeDate;
      $this->ChangeTime=$_changeTime;
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
     * Get AccType value
     * @return string|null
     */
    public function getAccType()
    {
        return $this->AccType;
    }
    /**
     * Set AccType value
     * @param string $_accType the AccType
     * @return string
     */
    public function setAccType($_accType)
    {
        return ($this->AccType = $_accType);
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
