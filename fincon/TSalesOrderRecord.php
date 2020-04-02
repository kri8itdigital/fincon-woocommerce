<?php
/**
 * File for class TSalesOrderRecord
 * @package FinconWebAPI
 * @author Fincon Information Technologies
 * @version 5247003
 * @date 2019-09-20
 */
class TSalesOrderRecord
{
    /**
     * The AccNo
     * @var string
     */
    public $AccNo;
    /**
     * The LocNo
     * @var string
     */
    public $LocNo;
    /**
     * The TotalExcl
     * @var double
     */
    public $TotalExcl;
    /**
     * The TotalIncl
     * @var double
     */
    public $TotalIncl;
    /**
     * The CustomerRef
     * @var string
     */
    public $CustomerRef;
    /**
     * The DebName
     * @var string
     */
    public $DebName;
    /**
     * The Addr1
     * @var string
     */
    public $Addr1;
    /**
     * The Addr2
     * @var string
     */
    public $Addr2;
    /**
     * The Addr3
     * @var string
     */
    public $Addr3;
    /**
     * The PCode
     * @var string
     */
    public $PCode;
    /**
     * The DelName
     * @var string
     */
    public $DelName;
    /**
     * The DelAddr1
     * @var string
     */
    public $DelAddr1;
    /**
     * The DelAddr2
     * @var string
     */
    public $DelAddr2;
    /**
     * The DelAddr3
     * @var string
     */
    public $DelAddr3;
    /**
     * The DelAddr4
     * @var string
     */
    public $DelAddr4;
    /**
     * The DelPCode
     * @var string
     */
    public $DelPCode;
    /**
     * The DelInstruc1
     * @var string
     */
    public $DelInstruc1;
    /**
     * The DelInstruc2
     * @var string
     */
    public $DelInstruc2;
    /**
     * The DelInstruc3
     * @var string
     */
    public $DelInstruc3;
    /**
     * The DelInstruc4
     * @var string
     */
    public $DelInstruc4;
    /**
     * The DelInstruc5
     * @var string
     */
    public $DelInstruc5;
    /**
     * The DelInstruc6
     * @var string
     */
    public $DelInstruc6;
    /**
     * The DeliveryMethod
     * @var string
     */
    public $DeliveryMethod;
    /**
     * The RepCode
     * @var string
     */
    public $RepCode;
    /**
     * The TaxNo
     * @var string
     */
    public $TaxNo;
    /**
     * Constructor method for TSalesOrderRecord
     * @see parent::__construct()
     * @param string $_accNo
     * @param string $_locNo
     * @param double $_totalExcl
     * @param double $_totalIncl
     * @param string $_customerRef
     * @param string $_debName
     * @param string $_addr1
     * @param string $_addr2
     * @param string $_addr3
     * @param string $_pCode
     * @param string $_delName
     * @param string $_delAddr1
     * @param string $_delAddr2
     * @param string $_delAddr3
     * @param string $_delAddr4
     * @param string $_delPCode
     * @param string $_delInstruc1
     * @param string $_delInstruc2
     * @param string $_delInstruc3
     * @param string $_delInstruc4
     * @param string $_delInstruc5
     * @param string $_delInstruc6
     * @param string $_deliveryMethod
     * @param string $_repCode
     * @param string $_taxNo
     * @return TSalesOrderRecord
     */
    public function __construct($_accNo = NULL,$_locNo = NULL,$_totalExcl = NULL,$_totalIncl = NULL,$_customerRef = NULL,$_debName = NULL,$_addr1 = NULL,$_addr2 = NULL,$_addr3 = NULL,$_pCode = NULL,$_delName = NULL,$_delAddr1 = NULL,$_delAddr2 = NULL,$_delAddr3 = NULL,$_delAddr4 = NULL,$_delPCode = NULL,$_delInstruc1 = NULL,$_delInstruc2 = NULL,$_delInstruc3 = NULL,$_delInstruc4 = NULL,$_delInstruc5 = NULL,$_delInstruc6 = NULL,$_deliveryMethod = NULL,$_repCode = NULL,$_taxNo = NULL)
    {
      $this->AccNo=$_accNo;
      $this->LocNo=$_locNo;
      $this->TotalExcl=$_totalExcl;
      $this->TotalIncl=$_totalIncl;
      $this->CustomerRef=$_customerRef;
      $this->DebName=$_debName;
      $this->Addr1=$_addr1;
      $this->Addr2=$_addr2;
      $this->Addr3=$_addr3;
      $this->PCode=$_pCode;
      $this->DelName=$_delName;
      $this->DelAddr1=$_delAddr1;
      $this->DelAddr2=$_delAddr2;
      $this->DelAddr3=$_delAddr3;
      $this->DelAddr4=$_delAddr4;
      $this->DelPCode=$_delPCode;
      $this->DelInstruc1=$_delInstruc1;
      $this->DelInstruc2=$_delInstruc2;
      $this->DelInstruc3=$_delInstruc3;
      $this->DelInstruc4=$_delInstruc4;
      $this->DelInstruc5=$_delInstruc5;
      $this->DelInstruc6=$_delInstruc6;
      $this->DeliveryMethod=$_deliveryMethod;
      $this->RepCode=$_repCode;
      $this->TaxNo=$_taxNo;
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
     * Get TotalExcl value
     * @return double|null
     */
    public function getTotalExcl()
    {
        return $this->TotalExcl;
    }
    /**
     * Set TotalExcl value
     * @param double $_totalExcl the TotalExcl
     * @return double
     */
    public function setTotalExcl($_totalExcl)
    {
        return ($this->TotalExcl = $_totalExcl);
    }
    /**
     * Get TotalIncl value
     * @return double|null
     */
    public function getTotalIncl()
    {
        return $this->TotalIncl;
    }
    /**
     * Set TotalIncl value
     * @param double $_totalIncl the TotalIncl
     * @return double
     */
    public function setTotalIncl($_totalIncl)
    {
        return ($this->TotalIncl = $_totalIncl);
    }
    /**
     * Get CustomerRef value
     * @return string|null
     */
    public function getCustomerRef()
    {
        return $this->CustomerRef;
    }
    /**
     * Set CustomerRef value
     * @param string $_customerRef the CustomerRef
     * @return string
     */
    public function setCustomerRef($_customerRef)
    {
        return ($this->CustomerRef = $_customerRef);
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
     * Get Addr1 value
     * @return string|null
     */
    public function getAddr1()
    {
        return $this->Addr1;
    }
    /**
     * Set Addr1 value
     * @param string $_addr1 the Addr1
     * @return string
     */
    public function setAddr1($_addr1)
    {
        return ($this->Addr1 = $_addr1);
    }
    /**
     * Get Addr2 value
     * @return string|null
     */
    public function getAddr2()
    {
        return $this->Addr2;
    }
    /**
     * Set Addr2 value
     * @param string $_addr2 the Addr2
     * @return string
     */
    public function setAddr2($_addr2)
    {
        return ($this->Addr2 = $_addr2);
    }
    /**
     * Get Addr3 value
     * @return string|null
     */
    public function getAddr3()
    {
        return $this->Addr3;
    }
    /**
     * Set Addr3 value
     * @param string $_addr3 the Addr3
     * @return string
     */
    public function setAddr3($_addr3)
    {
        return ($this->Addr3 = $_addr3);
    }
    /**
     * Get PCode value
     * @return string|null
     */
    public function getPCode()
    {
        return $this->PCode;
    }
    /**
     * Set PCode value
     * @param string $_pCode the PCode
     * @return string
     */
    public function setPCode($_pCode)
    {
        return ($this->PCode = $_pCode);
    }
    /**
     * Get DelName value
     * @return string|null
     */
    public function getDelName()
    {
        return $this->DelName;
    }
    /**
     * Set DelName value
     * @param string $_delName the DelName
     * @return string
     */
    public function setDelName($_delName)
    {
        return ($this->DelName = $_delName);
    }
    /**
     * Get DelAddr1 value
     * @return string|null
     */
    public function getDelAddr1()
    {
        return $this->DelAddr1;
    }
    /**
     * Set DelAddr1 value
     * @param string $_delAddr1 the DelAddr1
     * @return string
     */
    public function setDelAddr1($_delAddr1)
    {
        return ($this->DelAddr1 = $_delAddr1);
    }
    /**
     * Get DelAddr2 value
     * @return string|null
     */
    public function getDelAddr2()
    {
        return $this->DelAddr2;
    }
    /**
     * Set DelAddr2 value
     * @param string $_delAddr2 the DelAddr2
     * @return string
     */
    public function setDelAddr2($_delAddr2)
    {
        return ($this->DelAddr2 = $_delAddr2);
    }
    /**
     * Get DelAddr3 value
     * @return string|null
     */
    public function getDelAddr3()
    {
        return $this->DelAddr3;
    }
    /**
     * Set DelAddr3 value
     * @param string $_delAddr3 the DelAddr3
     * @return string
     */
    public function setDelAddr3($_delAddr3)
    {
        return ($this->DelAddr3 = $_delAddr3);
    }
    /**
     * Get DelAddr4 value
     * @return string|null
     */
    public function getDelAddr4()
    {
        return $this->DelAddr4;
    }
    /**
     * Set DelAddr4 value
     * @param string $_delAddr4 the DelAddr4
     * @return string
     */
    public function setDelAddr4($_delAddr4)
    {
        return ($this->DelAddr4 = $_delAddr4);
    }
    /**
     * Get DelPCode value
     * @return string|null
     */
    public function getDelPCode()
    {
        return $this->DelPCode;
    }
    /**
     * Set DelPCode value
     * @param string $_delPCode the DelPCode
     * @return string
     */
    public function setDelPCode($_delPCode)
    {
        return ($this->DelPCode = $_delPCode);
    }
    /**
     * Get DelInstruc1 value
     * @return string|null
     */
    public function getDelInstruc1()
    {
        return $this->DelInstruc1;
    }
    /**
     * Set DelInstruc1 value
     * @param string $_delInstruc1 the DelInstruc1
     * @return string
     */
    public function setDelInstruc1($_delInstruc1)
    {
        return ($this->DelInstruc1 = $_delInstruc1);
    }
    /**
     * Get DelInstruc2 value
     * @return string|null
     */
    public function getDelInstruc2()
    {
        return $this->DelInstruc2;
    }
    /**
     * Set DelInstruc2 value
     * @param string $_delInstruc2 the DelInstruc2
     * @return string
     */
    public function setDelInstruc2($_delInstruc2)
    {
        return ($this->DelInstruc2 = $_delInstruc2);
    }
    /**
     * Get DelInstruc3 value
     * @return string|null
     */
    public function getDelInstruc3()
    {
        return $this->DelInstruc3;
    }
    /**
     * Set DelInstruc3 value
     * @param string $_delInstruc3 the DelInstruc3
     * @return string
     */
    public function setDelInstruc3($_delInstruc3)
    {
        return ($this->DelInstruc3 = $_delInstruc3);
    }
    /**
     * Get DelInstruc4 value
     * @return string|null
     */
    public function getDelInstruc4()
    {
        return $this->DelInstruc4;
    }
    /**
     * Set DelInstruc4 value
     * @param string $_delInstruc4 the DelInstruc4
     * @return string
     */
    public function setDelInstruc4($_delInstruc4)
    {
        return ($this->DelInstruc4 = $_delInstruc4);
    }
    /**
     * Get DelInstruc5 value
     * @return string|null
     */
    public function getDelInstruc5()
    {
        return $this->DelInstruc5;
    }
    /**
     * Set DelInstruc5 value
     * @param string $_delInstruc5 the DelInstruc5
     * @return string
     */
    public function setDelInstruc5($_delInstruc5)
    {
        return ($this->DelInstruc5 = $_delInstruc5);
    }
    /**
     * Get DelInstruc6 value
     * @return string|null
     */
    public function getDelInstruc6()
    {
        return $this->DelInstruc6;
    }
    /**
     * Set DelInstruc6 value
     * @param string $_delInstruc6 the DelInstruc6
     * @return string
     */
    public function setDelInstruc6($_delInstruc6)
    {
        return ($this->DelInstruc6 = $_delInstruc6);
    }
    /**
     * Get DeliveryMethod value
     * @return string|null
     */
    public function getDeliveryMethod()
    {
        return $this->DeliveryMethod;
    }
    /**
     * Set DeliveryMethod value
     * @param string $_deliveryMethod the DeliveryMethod
     * @return string
     */
    public function setDeliveryMethod($_deliveryMethod)
    {
        return ($this->DeliveryMethod = $_deliveryMethod);
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
    /**
     * Get TaxNo value
     * @return string|null
     */
    public function getTaxNo()
    {
        return $this->TaxNo;
    }
    /**
     * Set TaxNo value
     * @param string $_taxNo the TaxNo
     * @return string
     */
    public function setTaxNo($_taxNo)
    {
        return ($this->TaxNo = $_taxNo);
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
