<?php
/**
 * File for class TDebAccountRecord
 * @package FinconWebAPI
 * @subpackage
 * @author Fincon Information Technologies
 * @version 5247003
 * @date 2019-09-20
 */

class TDebAccountRecord
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
     * The RegName
     * @var string
     */
    public $RegName;
    /**
     * The TelNo
     * @var string
     */
    public $TelNo;
    /**
     * The TelNo1
     * @var string
     */
    public $TelNo1;
    /**
     * The FaxNo
     * @var string
     */
    public $FaxNo;
    /**
     * The Contact
     * @var string
     */
    public $Contact;
    /**
     * The Contact1
     * @var string
     */
    public $Contact1;
    /**
     * The TaxNo
     * @var string
     */
    public $TaxNo;
    /**
     * The CompanyNo
     * @var string
     */
    public $CompanyNo;
    /**
     * The Memo
     * @var string
     */
    public $Memo;
    /**
     * The ParentAccNo
     * @var string
     */
    public $ParentAccNo;
    /**
     * The Notes
     * @var string
     */
    public $Notes;
    /**
     * The AreaCode
     * @var string
     */
    public $AreaCode;
    /**
     * The RepCode
     * @var string
     */
    public $RepCode;
    /**
     * The TermCode
     * @var string
     */
    public $TermCode;
    /**
     * The EMail
     * @var string
     */
    public $EMail;
    /**
     * The EMail1
     * @var string
     */
    public $EMail1;
    /**
     * The Active
     * @var string
     */
    public $Active;
    /**
     * The CreditGuarantee
     * @var string
     */
    public $CreditGuarantee;
    /**
     * The CategoryCode
     * @var string
     */
    public $CategoryCode;
    /**
     * The ZeroTax
     * @var string
     */
    public $ZeroTax;
    /**
     * The CurrencyCode
     * @var string
     */
    public $CurrencyCode;
    /**
     * The DeliveryMethod
     * @var string
     */
    public $DeliveryMethod;
    /**
     * The FinRef
     * @var string
     */
    public $FinRef;
    /**
     * The AccRef
     * @var string
     */
    public $AccRef;
    /**
     * The BankName
     * @var string
     */
    public $BankName;
    /**
     * The BankAccNo
     * @var string
     */
    public $BankAccNo;
    /**
     * The Branch
     * @var string
     */
    public $Branch;
    /**
     * The StatementMail
     * @var string
     */
    public $StatementMail;
    /**
     * The StatementPrint
     * @var string
     */
    public $StatementPrint;
    /**
     * The AccManager
     * @var string
     */
    public $AccManager;
    /**
     * The InternalRep
     * @var string
     */
    public $InternalRep;
    /**
     * The Discount
     * @var double
     */
    public $Discount;
    /**
     * The CreditCover
     * @var double
     */
    public $CreditCover;
    /**
     * The CreditLimit
     * @var double
     */
    public $CreditLimit;
    /**
     * The PriceStruc
     * @var int
     */
    public $PriceStruc;
    /**
     * The CurrentBalance
     * @var double
     */
    public $CurrentBalance;
    /**
     * The SecurityLevel
     * @var string
     */
    public $SecurityLevel;
    /**
     * The AutoReval
     * @var string
     */
    public $AutoReval;
    /**
     * The DetailChange
     * @var string
     */
    public $DetailChange;
    /**
     * The BackOrders
     * @var string
     */
    public $BackOrders;
    /**
     * The WebList
     * @var string
     */
    public $WebList;
    /**
     * The OnHold
     * @var string
     */
    public $OnHold;
    /**
     * The Rebate
     * @var double
     */
    public $Rebate;
    /**
     * The OrderLoc
     * @var string
     */
    public $OrderLoc;
    /**
     * The SettlementDisc
     * @var double
     */
    public $SettlementDisc;
    /**
     * The TargetGP
     * @var double
     */
    public $TargetGP;
    /**
     * The Password
     * @var string
     */
    public $Password;
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
     * Constructor method for TDebAccountRecord
     * @see parent::__construct()
     * @param string $_accNo
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
     * @param string $_regName
     * @param string $_telNo
     * @param string $_telNo1
     * @param string $_faxNo
     * @param string $_contact
     * @param string $_contact1
     * @param string $_taxNo
     * @param string $_companyNo
     * @param string $_memo
     * @param string $_parentAccNo
     * @param string $_notes
     * @param string $_areaCode
     * @param string $_repCode
     * @param string $_termCode
     * @param string $_eMail
     * @param string $_eMail1
     * @param string $_active
     * @param string $_creditGuarantee
     * @param string $_categoryCode
     * @param string $_zeroTax
     * @param string $_currencyCode
     * @param string $_deliveryMethod
     * @param string $_finRef
     * @param string $_accRef
     * @param string $_bankName
     * @param string $_bankAccNo
     * @param string $_branch
     * @param string $_statementMail
     * @param string $_statementPrint
     * @param string $_accManager
     * @param string $_internalRep
     * @param double $_discount
     * @param double $_creditCover
     * @param double $_creditLimit
     * @param int $_priceStruc
     * @param double $_currentBalance
     * @param string $_securityLevel
     * @param string $_autoReval
     * @param string $_detailChange
     * @param string $_backOrders
     * @param string $_webList
     * @param string $_onHold
     * @param double $_rebate
     * @param string $_orderLoc
     * @param double $_settlementDisc
     * @param double $_targetGP
     * @param string $_password
     * @param string $_changeDate
     * @param string $_changeTime
     * @return TDebAccountRecord
     */
    public function __construct($_accNo = NULL,$_debName = NULL,$_addr1 = NULL,$_addr2 = NULL,$_addr3 = NULL,$_pCode = NULL,$_delName = NULL,$_delAddr1 = NULL,$_delAddr2 = NULL,$_delAddr3 = NULL,$_delAddr4 = NULL,$_delPCode = NULL,$_delInstruc1 = NULL,$_delInstruc2 = NULL,$_delInstruc3 = NULL,$_delInstruc4 = NULL,$_delInstruc5 = NULL,$_delInstruc6 = NULL,$_regName = NULL,$_telNo = NULL,$_telNo1 = NULL,$_faxNo = NULL,$_contact = NULL,$_contact1 = NULL,$_taxNo = NULL,$_companyNo = NULL,$_memo = NULL,$_parentAccNo = NULL,$_notes = NULL,$_areaCode = NULL,$_repCode = NULL,$_termCode = NULL,$_eMail = NULL,$_eMail1 = NULL,$_active = NULL,$_creditGuarantee = NULL,$_categoryCode = NULL,$_zeroTax = NULL,$_currencyCode = NULL,$_deliveryMethod = NULL,$_finRef = NULL,$_accRef = NULL,$_bankName = NULL,$_bankAccNo = NULL,$_branch = NULL,$_statementMail = NULL,$_statementPrint = NULL,$_accManager = NULL,$_internalRep = NULL,$_discount = NULL,$_creditCover = NULL,$_creditLimit = NULL,$_priceStruc = NULL,$_currentBalance = NULL,$_securityLevel = NULL,$_autoReval = NULL,$_detailChange = NULL,$_backOrders = NULL,$_webList = NULL,$_onHold = NULL,$_rebate = NULL,$_orderLoc = NULL,$_settlementDisc = NULL,$_targetGP = NULL,$_password = NULL,$_changeDate = NULL,$_changeTime = NULL)
    {
      $this->AccNo=$_accNo;
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
      $this->RegName=$_regName;
      $this->TelNo =$_telNo;
      $this->TelNo1 =$_telNo1;
      $this->FaxNo =$_faxNo;
      $this->Contact =$_contact;
      $this->Contact1 =$_contact1;
      $this->TaxNo =$_taxNo;
      $this->CompanyNo =$_companyNo;
      $this->Memo =$_memo;
      $this->ParentAccNo =$_parentAccNo;
      $this->Notes =$_notes;
      $this->AreaCode =$_areaCode;
      $this->RepCode =$_repCode;
      $this->TermCode =$_termCode;
      $this->EMail =$_eMail;
      $this->EMail1 =$_eMail1;
      $this->Active =$_active;
      $this->CreditGuarantee =$_creditGuarantee;
      $this->CategoryCode =$_categoryCode;
      $this->ZeroTax =$_zeroTax;
      $this->CurrencyCode =$_currencyCode;
      $this->DeliveryMethod =$_deliveryMethod;
      $this->FinRef =$_finRef;
      $this->AccRef =$_accRef;
      $this->BankName =$_bankName;
      $this->BankAccNo =$_bankAccNo;
      $this->Branch =$_branch;
      $this->StatementMail =$_statementMail;
      $this->StatementPrint =$_statementPrint;
      $this->AccManager =$_accManager;
      $this->InternalRep =$_internalRep;
      $this->Discount =$_discount;
      $this->CreditCover =$_creditCover;
      $this->CreditLimit =$_creditLimit;
      $this->PriceStruc =$_priceStruc;
      $this->CurrentBalance =$_currentBalance;
      $this->SecurityLevel =$_securityLevel;
      $this->AutoReval =$_autoReval;
      $this->DetailChange =$_detailChange;
      $this->BackOrders =$_backOrders;
      $this->WebList =$_webList;
      $this->OnHold =$_onHold;
      $this->Rebate =$_rebate;
      $this->OrderLoc =$_orderLoc;
      $this->SettlementDisc =$_settlementDisc;
      $this->TargetGP =$_targetGP;
      $this->Password =$_password;
      $this->ChangeDate =$_changeDate;
      $this->ChangeTime =$_changeTime;
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
     * Get TelNo1 value
     * @return string|null
     */
    public function getTelNo1()
    {
        return $this->TelNo1;
    }
    /**
     * Set TelNo1 value
     * @param string $_telNo1 the TelNo1
     * @return string
     */
    public function setTelNo1($_telNo1)
    {
        return ($this->TelNo1 = $_telNo1);
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
     * Get Contact1 value
     * @return string|null
     */
    public function getContact1()
    {
        return $this->Contact1;
    }
    /**
     * Set Contact1 value
     * @param string $_contact1 the Contact1
     * @return string
     */
    public function setContact1($_contact1)
    {
        return ($this->Contact1 = $_contact1);
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
     * Get CompanyNo value
     * @return string|null
     */
    public function getCompanyNo()
    {
        return $this->CompanyNo;
    }
    /**
     * Set CompanyNo value
     * @param string $_companyNo the CompanyNo
     * @return string
     */
    public function setCompanyNo($_companyNo)
    {
        return ($this->CompanyNo = $_companyNo);
    }
    /**
     * Get Memo value
     * @return string|null
     */
    public function getMemo()
    {
        return $this->Memo;
    }
    /**
     * Set Memo value
     * @param string $_memo the Memo
     * @return string
     */
    public function setMemo($_memo)
    {
        return ($this->Memo = $_memo);
    }
    /**
     * Get ParentAccNo value
     * @return string|null
     */
    public function getParentAccNo()
    {
        return $this->ParentAccNo;
    }
    /**
     * Set ParentAccNo value
     * @param string $_parentAccNo the ParentAccNo
     * @return string
     */
    public function setParentAccNo($_parentAccNo)
    {
        return ($this->ParentAccNo = $_parentAccNo);
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
     * Get TermCode value
     * @return string|null
     */
    public function getTermCode()
    {
        return $this->TermCode;
    }
    /**
     * Set TermCode value
     * @param string $_termCode the TermCode
     * @return string
     */
    public function setTermCode($_termCode)
    {
        return ($this->TermCode = $_termCode);
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
     * Get EMail1 value
     * @return string|null
     */
    public function getEMail1()
    {
        return $this->EMail1;
    }
    /**
     * Set EMail1 value
     * @param string $_eMail1 the EMail1
     * @return string
     */
    public function setEMail1($_eMail1)
    {
        return ($this->EMail1 = $_eMail1);
    }
    /**
     * Get Active value
     * @return string|null
     */
    public function getActive()
    {
        return $this->Active;
    }
    /**
     * Set Active value
     * @param string $_active the Active
     * @return string
     */
    public function setActive($_active)
    {
        return ($this->Active = $_active);
    }
    /**
     * Get CreditGuarantee value
     * @return string|null
     */
    public function getCreditGuarantee()
    {
        return $this->CreditGuarantee;
    }
    /**
     * Set CreditGuarantee value
     * @param string $_creditGuarantee the CreditGuarantee
     * @return string
     */
    public function setCreditGuarantee($_creditGuarantee)
    {
        return ($this->CreditGuarantee = $_creditGuarantee);
    }
    /**
     * Get CategoryCode value
     * @return string|null
     */
    public function getCategoryCode()
    {
        return $this->CategoryCode;
    }
    /**
     * Set CategoryCode value
     * @param string $_categoryCode the CategoryCode
     * @return string
     */
    public function setCategoryCode($_categoryCode)
    {
        return ($this->CategoryCode = $_categoryCode);
    }
    /**
     * Get ZeroTax value
     * @return string|null
     */
    public function getZeroTax()
    {
        return $this->ZeroTax;
    }
    /**
     * Set ZeroTax value
     * @param string $_zeroTax the ZeroTax
     * @return string
     */
    public function setZeroTax($_zeroTax)
    {
        return ($this->ZeroTax = $_zeroTax);
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $_currencyCode the CurrencyCode
     * @return string
     */
    public function setCurrencyCode($_currencyCode)
    {
        return ($this->CurrencyCode = $_currencyCode);
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
     * Get FinRef value
     * @return string|null
     */
    public function getFinRef()
    {
        return $this->FinRef;
    }
    /**
     * Set FinRef value
     * @param string $_finRef the FinRef
     * @return string
     */
    public function setFinRef($_finRef)
    {
        return ($this->FinRef = $_finRef);
    }
    /**
     * Get AccRef value
     * @return string|null
     */
    public function getAccRef()
    {
        return $this->AccRef;
    }
    /**
     * Set AccRef value
     * @param string $_accRef the AccRef
     * @return string
     */
    public function setAccRef($_accRef)
    {
        return ($this->AccRef = $_accRef);
    }
    /**
     * Get BankName value
     * @return string|null
     */
    public function getBankName()
    {
        return $this->BankName;
    }
    /**
     * Set BankName value
     * @param string $_bankName the BankName
     * @return string
     */
    public function setBankName($_bankName)
    {
        return ($this->BankName = $_bankName);
    }
    /**
     * Get BankAccNo value
     * @return string|null
     */
    public function getBankAccNo()
    {
        return $this->BankAccNo;
    }
    /**
     * Set BankAccNo value
     * @param string $_bankAccNo the BankAccNo
     * @return string
     */
    public function setBankAccNo($_bankAccNo)
    {
        return ($this->BankAccNo = $_bankAccNo);
    }
    /**
     * Get Branch value
     * @return string|null
     */
    public function getBranch()
    {
        return $this->Branch;
    }
    /**
     * Set Branch value
     * @param string $_branch the Branch
     * @return string
     */
    public function setBranch($_branch)
    {
        return ($this->Branch = $_branch);
    }
    /**
     * Get StatementMail value
     * @return string|null
     */
    public function getStatementMail()
    {
        return $this->StatementMail;
    }
    /**
     * Set StatementMail value
     * @param string $_statementMail the StatementMail
     * @return string
     */
    public function setStatementMail($_statementMail)
    {
        return ($this->StatementMail = $_statementMail);
    }
    /**
     * Get StatementPrint value
     * @return string|null
     */
    public function getStatementPrint()
    {
        return $this->StatementPrint;
    }
    /**
     * Set StatementPrint value
     * @param string $_statementPrint the StatementPrint
     * @return string
     */
    public function setStatementPrint($_statementPrint)
    {
        return ($this->StatementPrint = $_statementPrint);
    }
    /**
     * Get AccManager value
     * @return string|null
     */
    public function getAccManager()
    {
        return $this->AccManager;
    }
    /**
     * Set AccManager value
     * @param string $_accManager the AccManager
     * @return string
     */
    public function setAccManager($_accManager)
    {
        return ($this->AccManager = $_accManager);
    }
    /**
     * Get InternalRep value
     * @return string|null
     */
    public function getInternalRep()
    {
        return $this->InternalRep;
    }
    /**
     * Set InternalRep value
     * @param string $_internalRep the InternalRep
     * @return string
     */
    public function setInternalRep($_internalRep)
    {
        return ($this->InternalRep = $_internalRep);
    }
    /**
     * Get Discount value
     * @return double|null
     */
    public function getDiscount()
    {
        return $this->Discount;
    }
    /**
     * Set Discount value
     * @param double $_discount the Discount
     * @return double
     */
    public function setDiscount($_discount)
    {
        return ($this->Discount = $_discount);
    }
    /**
     * Get CreditCover value
     * @return double|null
     */
    public function getCreditCover()
    {
        return $this->CreditCover;
    }
    /**
     * Set CreditCover value
     * @param double $_creditCover the CreditCover
     * @return double
     */
    public function setCreditCover($_creditCover)
    {
        return ($this->CreditCover = $_creditCover);
    }
    /**
     * Get CreditLimit value
     * @return double|null
     */
    public function getCreditLimit()
    {
        return $this->CreditLimit;
    }
    /**
     * Set CreditLimit value
     * @param double $_creditLimit the CreditLimit
     * @return double
     */
    public function setCreditLimit($_creditLimit)
    {
        return ($this->CreditLimit = $_creditLimit);
    }
    /**
     * Get PriceStruc value
     * @return int|null
     */
    public function getPriceStruc()
    {
        return $this->PriceStruc;
    }
    /**
     * Set PriceStruc value
     * @param int $_priceStruc the PriceStruc
     * @return int
     */
    public function setPriceStruc($_priceStruc)
    {
        return ($this->PriceStruc = $_priceStruc);
    }
    /**
     * Get CurrentBalance value
     * @return double|null
     */
    public function getCurrentBalance()
    {
        return $this->CurrentBalance;
    }
    /**
     * Set CurrentBalance value
     * @param double $_currentBalance the CurrentBalance
     * @return double
     */
    public function setCurrentBalance($_currentBalance)
    {
        return ($this->CurrentBalance = $_currentBalance);
    }
    /**
     * Get SecurityLevel value
     * @return string|null
     */
    public function getSecurityLevel()
    {
        return $this->SecurityLevel;
    }
    /**
     * Set SecurityLevel value
     * @param string $_securityLevel the SecurityLevel
     * @return string
     */
    public function setSecurityLevel($_securityLevel)
    {
        return ($this->SecurityLevel = $_securityLevel);
    }
    /**
     * Get AutoReval value
     * @return string|null
     */
    public function getAutoReval()
    {
        return $this->AutoReval;
    }
    /**
     * Set AutoReval value
     * @param string $_autoReval the AutoReval
     * @return string
     */
    public function setAutoReval($_autoReval)
    {
        return ($this->AutoReval = $_autoReval);
    }
    /**
     * Get DetailChange value
     * @return string|null
     */
    public function getDetailChange()
    {
        return $this->DetailChange;
    }
    /**
     * Set DetailChange value
     * @param string $_detailChange the DetailChange
     * @return string
     */
    public function setDetailChange($_detailChange)
    {
        return ($this->DetailChange = $_detailChange);
    }
    /**
     * Get BackOrders value
     * @return string|null
     */
    public function getBackOrders()
    {
        return $this->BackOrders;
    }
    /**
     * Set BackOrders value
     * @param string $_backOrders the BackOrders
     * @return string
     */
    public function setBackOrders($_backOrders)
    {
        return ($this->BackOrders = $_backOrders);
    }
    /**
     * Get WebList value
     * @return string|null
     */
    public function getWebList()
    {
        return $this->WebList;
    }
    /**
     * Set WebList value
     * @param string $_webList the WebList
     * @return string
     */
    public function setWebList($_webList)
    {
        return ($this->WebList = $_webList);
    }
    /**
     * Get OnHold value
     * @return string|null
     */
    public function getOnHold()
    {
        return $this->OnHold;
    }
    /**
     * Set OnHold value
     * @param string $_onHold the OnHold
     * @return string
     */
    public function setOnHold($_onHold)
    {
        return ($this->OnHold = $_onHold);
    }
    /**
     * Get Rebate value
     * @return double|null
     */
    public function getRebate()
    {
        return $this->Rebate;
    }
    /**
     * Set Rebate value
     * @param double $_rebate the Rebate
     * @return double
     */
    public function setRebate($_rebate)
    {
        return ($this->Rebate = $_rebate);
    }
    /**
     * Get OrderLoc value
     * @return string|null
     */
    public function getOrderLoc()
    {
        return $this->OrderLoc;
    }
    /**
     * Set OrderLoc value
     * @param string $_orderLoc the OrderLoc
     * @return string
     */
    public function setOrderLoc($_orderLoc)
    {
        return ($this->OrderLoc = $_orderLoc);
    }
    /**
     * Get SettlementDisc value
     * @return double|null
     */
    public function getSettlementDisc()
    {
        return $this->SettlementDisc;
    }
    /**
     * Set SettlementDisc value
     * @param double $_settlementDisc the SettlementDisc
     * @return double
     */
    public function setSettlementDisc($_settlementDisc)
    {
        return ($this->SettlementDisc = $_settlementDisc);
    }
    /**
     * Get TargetGP value
     * @return double|null
     */
    public function getTargetGP()
    {
        return $this->TargetGP;
    }
    /**
     * Set TargetGP value
     * @param double $_targetGP the TargetGP
     * @return double
     */
    public function setTargetGP($_targetGP)
    {
        return ($this->TargetGP = $_targetGP);
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $_password the Password
     * @return string
     */
    public function setPassword($_password)
    {
        return ($this->Password = $_password);
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
