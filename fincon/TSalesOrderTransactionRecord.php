<?php
/**
 * File for class TSalesOrderTransactionRecord
 * @package FinconWebAPI
 * @author Fincon Information Technologies
 * @version 5247003
 * @date 2019-09-20
 */
class TSalesOrderTransactionRecord
{
    /**
     * The Entry
     * @var string
     */
    public $Entry;
    /**
     * The DocNo
     * @var string
     */
    public $DocNo;
    /**
     * The ItemNo
     * @var string
     */
    public $ItemNo;
    /**
     * The Quantity
     * @var double
     */
    public $Quantity;
    /**
     * The LineTotalExcl
     * @var double
     */
    public $LineTotalExcl;
    /**
     * The TaxCode
     * @var int
     */
    public $TaxCode;
    /**
     * The LineTotalIncl
     * @var double
     */
    public $LineTotalIncl;
    /**
     * The Description
     * @var string
     */
    public $Description;
    /**
     * Constructor method for TSalesOrderTransactionRecord
     * @see parent::__construct()
     * @param string $_entry
     * @param string $_docNo
     * @param string $_itemNo
     * @param double $_quantity
     * @param double $_lineTotalExcl
     * @param int $_taxCode
     * @param double $_lineTotalIncl
     * @param string $_description
     * @return TSalesOrderTransactionRecord
     */
    public function __construct($_entry = NULL,$_docNo = NULL,$_itemNo = NULL,$_quantity = NULL,$_lineTotalExcl = NULL,$_taxCode = NULL,$_lineTotalIncl = NULL,$_description = NULL)
    {
      $this->Entry=$_entry;
      $this->DocNo=$_docNo;
      $this->ItemNo=$_itemNo;
      $this->Quantity=$_quantity;
      $this->LineTotalExcl=$_lineTotalExcl;
      $this->TaxCode=$_taxCode;
      $this->LineTotalIncl=$_lineTotalIncl;
      $this->Description=$_description;
    }
    /**
     * Get Entry value
     * @return string|null
     */
    public function getEntry()
    {
        return $this->Entry;
    }
    /**
     * Set Entry value
     * @param string $_entry the Entry
     * @return string
     */
    public function setEntry($_entry)
    {
        return ($this->Entry = $_entry);
    }
    /**
     * Get DocNo value
     * @return string|null
     */
    public function getDocNo()
    {
        return $this->DocNo;
    }
    /**
     * Set DocNo value
     * @param string $_docNo the DocNo
     * @return string
     */
    public function setDocNo($_docNo)
    {
        return ($this->DocNo = $_docNo);
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
     * Get Quantity value
     * @return double|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param double $_quantity the Quantity
     * @return double
     */
    public function setQuantity($_quantity)
    {
        return ($this->Quantity = $_quantity);
    }
    /**
     * Get LineTotalExcl value
     * @return double|null
     */
    public function getLineTotalExcl()
    {
        return $this->LineTotalExcl;
    }
    /**
     * Set LineTotalExcl value
     * @param double $_lineTotalExcl the LineTotalExcl
     * @return double
     */
    public function setLineTotalExcl($_lineTotalExcl)
    {
        return ($this->LineTotalExcl = $_lineTotalExcl);
    }
    /**
     * Get TaxCode value
     * @return int|null
     */
    public function getTaxCode()
    {
        return $this->TaxCode;
    }
    /**
     * Set TaxCode value
     * @param int $_taxCode the TaxCode
     * @return int
     */
    public function setTaxCode($_taxCode)
    {
        return ($this->TaxCode = $_taxCode);
    }
    /**
     * Get LineTotalIncl value
     * @return double|null
     */
    public function getLineTotalIncl()
    {
        return $this->LineTotalIncl;
    }
    /**
     * Set LineTotalIncl value
     * @param double $_lineTotalIncl the LineTotalIncl
     * @return double
     */
    public function setLineTotalIncl($_lineTotalIncl)
    {
        return ($this->LineTotalIncl = $_lineTotalIncl);
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
