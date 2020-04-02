<?php
/**
 * File for class TCROItemRecord
 * @package FinconWebAPI
 * @subpackage
 * @author Fincon Information Technologies
 * @version 5247003
 * @date 2019-09-20
 */
class TCRORecord
{
    /**
     * The TechCode
     * @var string
     */
    public $TechCode;
    /**
     * The Assistant1
     * @var string
     */
    public $Assistant1;
    /**
     * The Assistant2
     * @var string
     */
    public $Assistant2;
    /**
     * The Assistant3
     * @var string
     */
    public $Assistant3;
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
     * The Contact
     * @var string
     */
    public $Contact;
    /**
     * The TelNo
     * @var string
     */
    public $TelNo;
    /**
     * The FaxNo
     * @var string
     */
    public $FaxNo;
    /**
     * The EMail
     * @var string
     */
    public $EMail;
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
     * The CustomerRef
     * @var string
     */
    public $CustomerRef;
    /**
     * The TaxNo
     * @var string
     */
    public $TaxNo;
    /**
     * The RegNo
     * @var string
     */
    public $RegNo;
    /**
     * The RegName
     * @var string
     */
    public $RegName;
    /**
     * The AreaCode
     * @var string
     */
    public $AreaCode;
    /**
     * The AreaDescription
     * @var string
     */
    public $AreaDescription;
    /**
     * The Comment
     * @var string
     */
    public $Comment;
    /**
     * The WayBillIn
     * @var string
     */
    public $WayBillIn;
    /**
     * The CourierIn
     * @var string
     */
    public $CourierIn;
    /**
     * The DateIn
     * @var string
     */
    public $DateIn;
    /**
     * The ChargeIn
     * @var double
     */
    public $ChargeIn;
    /**
     * The WayBillOut
     * @var string
     */
    public $WayBillOut;
    /**
     * The CourierOut
     * @var string
     */
    public $CourierOut;
    /**
     * The DateOut
     * @var string
     */
    public $DateOut;
    /**
     * The ChargeOut
     * @var double
     */
    public $ChargeOut;
    /**
     * The CRODate
     * @var string
     */
    public $CRODate;
    /**
     * The DelDate
     * @var string
     */
    public $DelDate;
    /**
     * The CompletionDate
     * @var string
     */
    public $CompletionDate;
    /**
     * The FetchedDate
     * @var string
     */
    public $FetchedDate;
    /**
     * The RepeatCall
     * @var string
     */
    public $RepeatCall;
    /**
     * The AdditionalNotes
     * @var string
     */
    public $AdditionalNotes;
    /**
     * The PushID
     * @var string
     */
    public $PushID;
    /**
     * Constructor method for TCRORecord
     * @see parent::__construct()
     * @param string $_techCode
     * @param string $_assistant1
     * @param string $_assistant2
     * @param string $_assistant3
     * @param string $_accNo
     * @param string $_debName
     * @param string $_addr1
     * @param string $_addr2
     * @param string $_addr3
     * @param string $_contact
     * @param string $_telNo
     * @param string $_faxNo
     * @param string $_eMail
     * @param string $_delName
     * @param string $_delAddr1
     * @param string $_delAddr2
     * @param string $_delAddr3
     * @param string $_delAddr4
     * @param string $_delPCode
     * @param string $_customerRef
     * @param string $_taxNo
     * @param string $_regNo
     * @param string $_regName
     * @param string $_areaCode
     * @param string $_areaDescription
     * @param string $_comment
     * @param string $_wayBillIn
     * @param string $_courierIn
     * @param string $_dateIn
     * @param double $_chargeIn
     * @param string $_wayBillOut
     * @param string $_courierOut
     * @param string $_dateOut
     * @param double $_chargeOut
     * @param string $_cRODate
     * @param string $_delDate
     * @param string $_completionDate
     * @param string $_fetchedDate
     * @param string $_repeatCall
     * @param string $_additionalNotes
     * @param string $_pushID
     * @return TCRORecord
     */
    public function __construct($_techCode = NULL,$_assistant1 = NULL,$_assistant2 = NULL,$_assistant3 = NULL,$_accNo = NULL,$_debName = NULL,$_addr1 = NULL,$_addr2 = NULL,$_addr3 = NULL,$_contact = NULL,$_telNo = NULL,$_faxNo = NULL,$_eMail = NULL,$_delName = NULL,$_delAddr1 = NULL,$_delAddr2 = NULL,$_delAddr3 = NULL,$_delAddr4 = NULL,$_delPCode = NULL,$_customerRef = NULL,$_taxNo = NULL,$_regNo = NULL,$_regName = NULL,$_areaCode = NULL,$_areaDescription = NULL,$_comment = NULL,$_wayBillIn = NULL,$_courierIn = NULL,$_dateIn = NULL,$_chargeIn = NULL,$_wayBillOut = NULL,$_courierOut = NULL,$_dateOut = NULL,$_chargeOut = NULL,$_cRODate = NULL,$_delDate = NULL,$_completionDate = NULL,$_fetchedDate = NULL,$_repeatCall = NULL,$_additionalNotes = NULL,$_pushID = NULL)
    {
      $this->TechCode=$_techCode;
      $this->Assistant1=$_assistant1;
      $this->Assistant2=$_assistant2;
      $this->Assistant3=$_assistant3;
      $this->AccNo=$_accNo;
      $this->DebName=$_debName;
      $this->Addr1=$_addr1;
      $this->Addr2=$_addr2;
      $this->Addr3=$_addr3;
      $this->Contact=$_contact;
      $this->TelNo=$_telNo;
      $this->FaxNo=$_faxNo;
      $this->EMail=$_eMail;
      $this->DelName=$_delName;
      $this->DelAddr1=$_delAddr1;
      $this->DelAddr2=$_delAddr2;
      $this->DelAddr3=$_delAddr3;
      $this->DelAddr4=$_delAddr4;
      $this->DelPCode=$_delPCode;
      $this->CustomerRef=$_customerRef;
      $this->TaxNo=$_taxNo;
      $this->RegNo=$_regNo;
      $this->RegName=$_regName;
      $this->AreaCode=$_areaCode;
      $this->AreaDescription=$_areaDescription;
      $this->Comment=$_comment;
      $this->WayBillIn=$_wayBillIn;
      $this->CourierIn=$_courierIn;
      $this->DateIn=$_dateIn;
      $this->ChargeIn=$_chargeIn;
      $this->WayBillOut=$_wayBillOut;
      $this->CourierOut=$_courierOut;
      $this->DateOut=$_dateOut;
      $this->ChargeOut=$_chargeOut;
      $this->CRODate=$_cRODate;
      $this->DelDate=$_delDate;
      $this->CompletionDate=$_completionDate;
      $this->FetchedDate=$_fetchedDate;
      $this->RepeatCall=$_repeatCall;
      $this->AdditionalNotes=$_additionalNotes;
      $this->PushID=$_pushID;
    }
    /**
     * Get TechCode value
     * @return string|null
     */
    public function getTechCode()
    {
        return $this->TechCode;
    }
    /**
     * Set TechCode value
     * @param string $_techCode the TechCode
     * @return string
     */
    public function setTechCode($_techCode)
    {
        return ($this->TechCode = $_techCode);
    }
    /**
     * Get Assistant1 value
     * @return string|null
     */
    public function getAssistant1()
    {
        return $this->Assistant1;
    }
    /**
     * Set Assistant1 value
     * @param string $_assistant1 the Assistant1
     * @return string
     */
    public function setAssistant1($_assistant1)
    {
        return ($this->Assistant1 = $_assistant1);
    }
    /**
     * Get Assistant2 value
     * @return string|null
     */
    public function getAssistant2()
    {
        return $this->Assistant2;
    }
    /**
     * Set Assistant2 value
     * @param string $_assistant2 the Assistant2
     * @return string
     */
    public function setAssistant2($_assistant2)
    {
        return ($this->Assistant2 = $_assistant2);
    }
    /**
     * Get Assistant3 value
     * @return string|null
     */
    public function getAssistant3()
    {
        return $this->Assistant3;
    }
    /**
     * Set Assistant3 value
     * @param string $_assistant3 the Assistant3
     * @return string
     */
    public function setAssistant3($_assistant3)
    {
        return ($this->Assistant3 = $_assistant3);
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
     * Get Contact value
     * @return string|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param string $_contact the Contact
     * @return string
     */
    public function setContact($_contact)
    {
        return ($this->Contact = $_contact);
    }
    /**
     * Get TelNo value
     * @return string|null
     */
    public function getTelNo()
    {
        return $this->TelNo;
    }
    /**
     * Set TelNo value
     * @param string $_telNo the TelNo
     * @return string
     */
    public function setTelNo($_telNo)
    {
        return ($this->TelNo = $_telNo);
    }
    /**
     * Get FaxNo value
     * @return string|null
     */
    public function getFaxNo()
    {
        return $this->FaxNo;
    }
    /**
     * Set FaxNo value
     * @param string $_faxNo the FaxNo
     * @return string
     */
    public function setFaxNo($_faxNo)
    {
        return ($this->FaxNo = $_faxNo);
    }
    /**
     * Get EMail value
     * @return string|null
     */
    public function getEMail()
    {
        return $this->EMail;
    }
    /**
     * Set EMail value
     * @param string $_eMail the EMail
     * @return string
     */
    public function setEMail($_eMail)
    {
        return ($this->EMail = $_eMail);
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
    /**
     * Get RegNo value
     * @return string|null
     */
    public function getRegNo()
    {
        return $this->RegNo;
    }
    /**
     * Set RegNo value
     * @param string $_regNo the RegNo
     * @return string
     */
    public function setRegNo($_regNo)
    {
        return ($this->RegNo = $_regNo);
    }
    /**
     * Get RegName value
     * @return string|null
     */
    public function getRegName()
    {
        return $this->RegName;
    }
    /**
     * Set RegName value
     * @param string $_regName the RegName
     * @return string
     */
    public function setRegName($_regName)
    {
        return ($this->RegName = $_regName);
    }
    /**
     * Get AreaCode value
     * @return string|null
     */
    public function getAreaCode()
    {
        return $this->AreaCode;
    }
    /**
     * Set AreaCode value
     * @param string $_areaCode the AreaCode
     * @return string
     */
    public function setAreaCode($_areaCode)
    {
        return ($this->AreaCode = $_areaCode);
    }
    /**
     * Get AreaDescription value
     * @return string|null
     */
    public function getAreaDescription()
    {
        return $this->AreaDescription;
    }
    /**
     * Set AreaDescription value
     * @param string $_areaDescription the AreaDescription
     * @return string
     */
    public function setAreaDescription($_areaDescription)
    {
        return ($this->AreaDescription = $_areaDescription);
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $_comment the Comment
     * @return string
     */
    public function setComment($_comment)
    {
        return ($this->Comment = $_comment);
    }
    /**
     * Get WayBillIn value
     * @return string|null
     */
    public function getWayBillIn()
    {
        return $this->WayBillIn;
    }
    /**
     * Set WayBillIn value
     * @param string $_wayBillIn the WayBillIn
     * @return string
     */
    public function setWayBillIn($_wayBillIn)
    {
        return ($this->WayBillIn = $_wayBillIn);
    }
    /**
     * Get CourierIn value
     * @return string|null
     */
    public function getCourierIn()
    {
        return $this->CourierIn;
    }
    /**
     * Set CourierIn value
     * @param string $_courierIn the CourierIn
     * @return string
     */
    public function setCourierIn($_courierIn)
    {
        return ($this->CourierIn = $_courierIn);
    }
    /**
     * Get DateIn value
     * @return string|null
     */
    public function getDateIn()
    {
        return $this->DateIn;
    }
    /**
     * Set DateIn value
     * @param string $_dateIn the DateIn
     * @return string
     */
    public function setDateIn($_dateIn)
    {
        return ($this->DateIn = $_dateIn);
    }
    /**
     * Get ChargeIn value
     * @return double|null
     */
    public function getChargeIn()
    {
        return $this->ChargeIn;
    }
    /**
     * Set ChargeIn value
     * @param double $_chargeIn the ChargeIn
     * @return double
     */
    public function setChargeIn($_chargeIn)
    {
        return ($this->ChargeIn = $_chargeIn);
    }
    /**
     * Get WayBillOut value
     * @return string|null
     */
    public function getWayBillOut()
    {
        return $this->WayBillOut;
    }
    /**
     * Set WayBillOut value
     * @param string $_wayBillOut the WayBillOut
     * @return string
     */
    public function setWayBillOut($_wayBillOut)
    {
        return ($this->WayBillOut = $_wayBillOut);
    }
    /**
     * Get CourierOut value
     * @return string|null
     */
    public function getCourierOut()
    {
        return $this->CourierOut;
    }
    /**
     * Set CourierOut value
     * @param string $_courierOut the CourierOut
     * @return string
     */
    public function setCourierOut($_courierOut)
    {
        return ($this->CourierOut = $_courierOut);
    }
    /**
     * Get DateOut value
     * @return string|null
     */
    public function getDateOut()
    {
        return $this->DateOut;
    }
    /**
     * Set DateOut value
     * @param string $_dateOut the DateOut
     * @return string
     */
    public function setDateOut($_dateOut)
    {
        return ($this->DateOut = $_dateOut);
    }
    /**
     * Get ChargeOut value
     * @return double|null
     */
    public function getChargeOut()
    {
        return $this->ChargeOut;
    }
    /**
     * Set ChargeOut value
     * @param double $_chargeOut the ChargeOut
     * @return double
     */
    public function setChargeOut($_chargeOut)
    {
        return ($this->ChargeOut = $_chargeOut);
    }
    /**
     * Get CRODate value
     * @return string|null
     */
    public function getCRODate()
    {
        return $this->CRODate;
    }
    /**
     * Set CRODate value
     * @param string $_cRODate the CRODate
     * @return string
     */
    public function setCRODate($_cRODate)
    {
        return ($this->CRODate = $_cRODate);
    }
    /**
     * Get DelDate value
     * @return string|null
     */
    public function getDelDate()
    {
        return $this->DelDate;
    }
    /**
     * Set DelDate value
     * @param string $_delDate the DelDate
     * @return string
     */
    public function setDelDate($_delDate)
    {
        return ($this->DelDate = $_delDate);
    }
    /**
     * Get CompletionDate value
     * @return string|null
     */
    public function getCompletionDate()
    {
        return $this->CompletionDate;
    }
    /**
     * Set CompletionDate value
     * @param string $_completionDate the CompletionDate
     * @return string
     */
    public function setCompletionDate($_completionDate)
    {
        return ($this->CompletionDate = $_completionDate);
    }
    /**
     * Get FetchedDate value
     * @return string|null
     */
    public function getFetchedDate()
    {
        return $this->FetchedDate;
    }
    /**
     * Set FetchedDate value
     * @param string $_fetchedDate the FetchedDate
     * @return string
     */
    public function setFetchedDate($_fetchedDate)
    {
        return ($this->FetchedDate = $_fetchedDate);
    }
    /**
     * Get RepeatCall value
     * @return string|null
     */
    public function getRepeatCall()
    {
        return $this->RepeatCall;
    }
    /**
     * Set RepeatCall value
     * @param string $_repeatCall the RepeatCall
     * @return string
     */
    public function setRepeatCall($_repeatCall)
    {
        return ($this->RepeatCall = $_repeatCall);
    }
    /**
     * Get AdditionalNotes value
     * @return string|null
     */
    public function getAdditionalNotes()
    {
        return $this->AdditionalNotes;
    }
    /**
     * Set AdditionalNotes value
     * @param string $_additionalNotes the AdditionalNotes
     * @return string
     */
    public function setAdditionalNotes($_additionalNotes)
    {
        return ($this->AdditionalNotes = $_additionalNotes);
    }
    /**
     * Get PushID value
     * @return string|null
     */
    public function getPushID()
    {
        return $this->PushID;
    }
    /**
     * Set PushID value
     * @param string $_pushID the PushID
     * @return string
     */
    public function setPushID($_pushID)
    {
        return ($this->PushID = $_pushID);
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
