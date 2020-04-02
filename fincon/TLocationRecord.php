<?php
/**
 * File for class TLocationRecord
 * @package FinconWebAPI
 * @author Fincon Information Technologies
 * @version 5247003
 * @date 2019-09-20
 */
class TLocationRecord
{
    /**
     * The LocNo
     * @var string
     */
    public $LocNo;
    /**
     * The Description
     * @var string
     */
    public $Description;
    /**
     * Constructor method for TLocationRecord
     * @see parent::__construct()
     * @param string $_locNo
     * @param string $_description
     * @return TLocationRecord
     */
    public function __construct($_locNo = NULL,$_description = NULL)
    {
        $this->LocNo=$_locNo;
        $this->Description=$_description;
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
