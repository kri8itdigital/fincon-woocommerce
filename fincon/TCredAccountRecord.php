<?php
/**
 * File for class TCredAccountRecord
 * @package FinconWebAPI
 * @subpackage
 * @author Fincon Information Technologies
 * @version 5247003
 * @date 2019-09-20
 */
class TCredAccountRecord
{
    /**
     * The AccNo
     * @var string
     */
    public $AccNo;
    /**
     * The CredName
     * @var string
     */
    public $CredName;
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
     * The ColName
     * @var string
     */
    public $ColName;
    /**
     * The ColAddr1
     * @var string
     */
    public $ColAddr1;
    /**
     * The ColAddr2
     * @var string
     */
    public $ColAddr2;
    /**
     * The ColAddr3
     * @var string
     */
    public $ColAddr3;
    /**
     * The ColAddr4
     * @var string
     */
    public $ColAddr4;
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
     * The Memo
     * @var string
     */
    public $Memo;
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
     * The CurrencyCode
     * @var string
     */
    public $CurrencyCode;
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
     * The RemittanceMail
     * @var string
     */
    public $RemittanceMail;
    /**
     * The RemittancePrint
     * @var string
     */
    public $RemittancePrint;
    /**
     * The CreditLimit
     * @var double
     */
    public $CreditLimit;
    /**
     * The ImportAcc
     * @var string
     */
    public $ImportAcc;
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
     * The SettlementDisc
     * @var double
     */
    public $SettlementDisc;
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
     * Constructor method for TCredAccountRecord
     * @see parent::__construct()
     * @param string $_accNo
     * @param string $_credName
     * @param string $_addr1
     * @param string $_addr2
     * @param string $_addr3
     * @param string $_pCode
     * @param string $_colName
     * @param string $_colAddr1
     * @param string $_colAddr2
     * @param string $_colAddr3
     * @param string $_colAddr4
     * @param string $_telNo
     * @param string $_telNo1
     * @param string $_faxNo
     * @param string $_contact
     * @param string $_contact1
     * @param string $_taxNo
     * @param string $_memo
     * @param string $_notes
     * @param string $_areaCode
     * @param string $_termCode
     * @param string $_eMail
     * @param string $_eMail1
     * @param string $_active
     * @param string $_currencyCode
     * @param string $_finRef
     * @param string $_accRef
     * @param string $_bankName
     * @param string $_bankAccNo
     * @param string $_branch
     * @param string $_remittanceMail
     * @param string $_remittancePrint
     * @param double $_creditLimit
     * @param string $_importAcc
     * @param double $_currentBalance
     * @param string $_securityLevel
     * @param string $_autoReval
     * @param string $_detailChange
     * @param string $_backOrders
     * @param double $_settlementDisc
     * @param string $_changeDate
     * @param string $_changeTime
     * @return TCredAccountRecord
     */
    public function __construct($_accNo = NULL,$_credName = NULL,$_addr1 = NULL,$_addr2 = NULL,$_addr3 = NULL,$_pCode = NULL,$_colName = NULL,$_colAddr1 = NULL,$_colAddr2 = NULL,$_colAddr3 = NULL,$_colAddr4 = NULL,$_telNo = NULL,$_telNo1 = NULL,$_faxNo = NULL,$_contact = NULL,$_contact1 = NULL,$_taxNo = NULL,$_memo = NULL,$_notes = NULL,$_areaCode = NULL,$_termCode = NULL,$_eMail = NULL,$_eMail1 = NULL,$_active = NULL,$_currencyCode = NULL,$_finRef = NULL,$_accRef = NULL,$_bankName = NULL,$_bankAccNo = NULL,$_branch = NULL,$_remittanceMail = NULL,$_remittancePrint = NULL,$_creditLimit = NULL,$_importAcc = NULL,$_currentBalance = NULL,$_securityLevel = NULL,$_autoReval = NULL,$_detailChange = NULL,$_backOrders = NULL,$_settlementDisc = NULL,$_changeDate = NULL,$_changeTime = NULL)
    {
      $this->AccNo=$_accNo;
      $this->CredName=$_credName;
      $this->Addr1=$_addr1;
      $this->Addr2=$_addr2;
      $this->Addr3=$_addr3;
      $this->PCode=$_pCode;
      $this->ColName=$_colName;
      $this->ColAddr1=$_colAddr1;
      $this->ColAddr2=$_colAddr2;
      $this->ColAddr3=$_colAddr3;
      $this->ColAddr4=$_colAddr4;
      $this->TelNo=$_telNo;
      $this->TelNo1=$_telNo1;
      $this->FaxNo=$_faxNo;
      $this->Contact=$_contact;
      $this->Contact1=$_contact1;
      $this->TaxNo=$_taxNo;
      $this->Memo=$_memo;
      $this->Notes=$_notes;
      $this->AreaCode=$_areaCode;
      $this->TermCode=$_termCode;
      $this->EMail=$_eMail;
      $this->EMail1=$_eMail1;
      $this->Active=$_active;
      $this->CurrencyCode=$_currencyCode;
      $this->FinRef=$_finRef;
      $this->AccRef=$_accRef;
      $this->BankName=$_bankName;
      $this->BankAccNo=$_bankAccNo;
      $this->Branch=$_branch;
      $this->RemittanceMail=$_remittanceMail;
      $this->RemittancePrint=$_remittancePrint;
      $this->CreditLimit=$_creditLimit;
      $this->ImportAcc=$_importAcc;
      $this->CurrentBalance=$_currentBalance;
      $this->SecurityLevel=$_securityLevel;
      $this->AutoReval=$_autoReval;
      $this->DetailChange=$_detailChange;
      $this->BackOrders=$_backOrders;
      $this->SettlementDisc=$_settlementDisc;
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
     * Get CredName value
     * @return string|null
     */
    public function getCredName()
    {
        return $this->CredName;
    }
    /**
     * Set CredName value
     * @param string $_credName the CredName
     * @return string
     */
    public function setCredName($_credName)
    {
        return ($this->CredName = $_credName);
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
     * Get ColName value
     * @return string|null
     */
    public function getColName()
    {
        return $this->ColName;
    }
    /**
     * Set ColName value
     * @param string $_colName the ColName
     * @return string
     */
    public function setColName($_colName)
    {
        return ($this->ColName = $_colName);
    }
    /**
     * Get ColAddr1 value
     * @return string|null
     */
    public function getColAddr1()
    {
        return $this->ColAddr1;
    }
    /**
     * Set ColAddr1 value
     * @param string $_colAddr1 the ColAddr1
     * @return string
     */
    public function setColAddr1($_colAddr1)
    {
        return ($this->ColAddr1 = $_colAddr1);
    }
    /**
     * Get ColAddr2 value
     * @return string|null
     */
    public function getColAddr2()
    {
        return $this->ColAddr2;
    }
    /**
     * Set ColAddr2 value
     * @param string $_colAddr2 the ColAddr2
     * @return string
     */
    public function setColAddr2($_colAddr2)
    {
        return ($this->ColAddr2 = $_colAddr2);
    }
    /**
     * Get ColAddr3 value
     * @return string|null
     */
    public function getColAddr3()
    {
        return $this->ColAddr3;
    }
    /**
     * Set ColAddr3 value
     * @param string $_colAddr3 the ColAddr3
     * @return string
     */
    public function setColAddr3($_colAddr3)
    {
        return ($this->ColAddr3 = $_colAddr3);
    }
    /**
     * Get ColAddr4 value
     * @return string|null
     */
    public function getColAddr4()
    {
        return $this->ColAddr4;
    }
    /**
     * Set ColAddr4 value
     * @param string $_colAddr4 the ColAddr4
     * @return string
     */
    public function setColAddr4($_colAddr4)
    {
        return ($this->ColAddr4 = $_colAddr4);
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
     * Get RemittanceMail value
     * @return string|null
     */
    public function getRemittanceMail()
    {
        return $this->RemittanceMail;
    }
    /**
     * Set RemittanceMail value
     * @param string $_remittanceMail the RemittanceMail
     * @return string
     */
    public function setRemittanceMail($_remittanceMail)
    {
        return ($this->RemittanceMail = $_remittanceMail);
    }
    /**
     * Get RemittancePrint value
     * @return string|null
     */
    public function getRemittancePrint()
    {
        return $this->RemittancePrint;
    }
    /**
     * Set RemittancePrint value
     * @param string $_remittancePrint the RemittancePrint
     * @return string
     */
    public function setRemittancePrint($_remittancePrint)
    {
        return ($this->RemittancePrint = $_remittancePrint);
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
     * Get ImportAcc value
     * @return string|null
     */
    public function getImportAcc()
    {
        return $this->ImportAcc;
    }
    /**
     * Set ImportAcc value
     * @param string $_importAcc the ImportAcc
     * @return string
     */
    public function setImportAcc($_importAcc)
    {
        return ($this->ImportAcc = $_importAcc);
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
