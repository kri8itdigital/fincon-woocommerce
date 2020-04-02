<?php
/**
 * File for class TCROItemRecord
 * @package FinconWebAPI
 * @subpackage
 * @author Fincon Information Technologies
 * @version 5247003
 * @date 2019-09-20
 */
class TCROItemRecord
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
     * The Description
     * @var string
     */
    public $Description;
    /**
     * The Notes
     * @var string
     */
    public $Notes;
    /**
     * The Fault
     * @var string
     */
    public $Fault;
    /**
     * The Diagnosis
     * @var string
     */
    public $Diagnosis;
    /**
     * The WorkDone
     * @var string
     */
    public $WorkDone;
    /**
     * The WarrantyRepair
     * @var string
     */
    public $WarrantyRepair;
    /**
     * The ServiceType
     * @var string
     */
    public $ServiceType;
    /**
     * The ContractNo
     * @var string
     */
    public $ContractNo;
    /**
     * The SwopSerialNo
     * @var string
     */
    public $SwopSerialNo;
    /**
     * The Status
     * @var string
     */
    public $Status;
    /**
     * The SubAccNo
     * @var string
     */
    public $SubAccNo;
    /**
     * Constructor method for TCROItemRecord
     * @see parent::__construct()
     * @param string $_serialNo
     * @param string $_itemNo
     * @param string $_description
     * @param string $_notes
     * @param string $_fault
     * @param string $_diagnosis
     * @param string $_workDone
     * @param string $_warrantyRepair
     * @param string $_serviceType
     * @param string $_contractNo
     * @param string $_swopSerialNo
     * @param string $_status
     * @param string $_subAccNo
     * @return TCROItemRecord
     */
    public function __construct($_serialNo = NULL,$_itemNo = NULL,$_description = NULL,$_notes = NULL,$_fault = NULL,$_diagnosis = NULL,$_workDone = NULL,$_warrantyRepair = NULL,$_serviceType = NULL,$_contractNo = NULL,$_swopSerialNo = NULL,$_status = NULL,$_subAccNo = NULL)
    {
      $this->SerialNo=$_serialNo;
      $this->ItemNo=$_itemNo;
      $this->Description=$_description;
      $this->Notes=$_notes;
      $this->Fault=$_fault;
      $this->Diagnosis=$_diagnosis;
      $this->WorkDone=$_workDone;
      $this->WarrantyRepair=$_warrantyRepair;
      $this->ServiceType=$_serviceType;
      $this->ContractNo=$_contractNo;
      $this->SwopSerialNo=$_swopSerialNo;
      $this->Status=$_status;
      $this->SubAccNo=$_subAccNo;
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
    /**
     * Get Notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $_notes the Notes
     * @return string
     */
    public function setNotes($_notes)
    {
        return ($this->Notes = $_notes);
    }
    /**
     * Get Fault value
     * @return string|null
     */
    public function getFault()
    {
        return $this->Fault;
    }
    /**
     * Set Fault value
     * @param string $_fault the Fault
     * @return string
     */
    public function setFault($_fault)
    {
        return ($this->Fault = $_fault);
    }
    /**
     * Get Diagnosis value
     * @return string|null
     */
    public function getDiagnosis()
    {
        return $this->Diagnosis;
    }
    /**
     * Set Diagnosis value
     * @param string $_diagnosis the Diagnosis
     * @return string
     */
    public function setDiagnosis($_diagnosis)
    {
        return ($this->Diagnosis = $_diagnosis);
    }
    /**
     * Get WorkDone value
     * @return string|null
     */
    public function getWorkDone()
    {
        return $this->WorkDone;
    }
    /**
     * Set WorkDone value
     * @param string $_workDone the WorkDone
     * @return string
     */
    public function setWorkDone($_workDone)
    {
        return ($this->WorkDone = $_workDone);
    }
    /**
     * Get WarrantyRepair value
     * @return string|null
     */
    public function getWarrantyRepair()
    {
        return $this->WarrantyRepair;
    }
    /**
     * Set WarrantyRepair value
     * @param string $_warrantyRepair the WarrantyRepair
     * @return string
     */
    public function setWarrantyRepair($_warrantyRepair)
    {
        return ($this->WarrantyRepair = $_warrantyRepair);
    }
    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @param string $_serviceType the ServiceType
     * @return string
     */
    public function setServiceType($_serviceType)
    {
        return ($this->ServiceType = $_serviceType);
    }
    /**
     * Get ContractNo value
     * @return string|null
     */
    public function getContractNo()
    {
        return $this->ContractNo;
    }
    /**
     * Set ContractNo value
     * @param string $_contractNo the ContractNo
     * @return string
     */
    public function setContractNo($_contractNo)
    {
        return ($this->ContractNo = $_contractNo);
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
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $_status the Status
     * @return string
     */
    public function setStatus($_status)
    {
        return ($this->Status = $_status);
    }
    /**
     * Get SubAccNo value
     * @return string|null
     */
    public function getSubAccNo()
    {
        return $this->SubAccNo;
    }
    /**
     * Set SubAccNo value
     * @param string $_subAccNo the SubAccNo
     * @return string
     */
    public function setSubAccNo($_subAccNo)
    {
        return ($this->SubAccNo = $_subAccNo);
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
