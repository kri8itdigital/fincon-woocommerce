<?php
/**
 * File for class TStockRecord
 * @package FinconWebAPI
 * @author Fincon Information Technologies
 * @version 5247003
 * @date 2019-09-20
 */
class TStockRecord
{
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
     * The ItemType
     * @var string
     */
    public $ItemType;
    /**
     * The SubItemType
     * @var string
     */
    public $SubItemType;
    /**
     * The UnitOfMeasure
     * @var string
     */
    public $UnitOfMeasure;
    /**
     * The Category
     * @var string
     */
    public $Category;
    /**
     * The CatDescription
     * @var string
     */
    public $CatDescription;
    /**
     * The CatWebList
     * @var string
     */
    public $CatWebList;
    /**
     * The Brand
     * @var string
     */
    public $Brand;
    /**
     * The BrandDescription
     * @var string
     */
    public $BrandDescription;
    /**
     * The Group
     * @var string
     */
    public $Group;
    /**
     * The GroupDescription
     * @var string
     */
    public $GroupDescription;
    /**
     * The ItemClass
     * @var string
     */
    public $ItemClass;
    /**
     * The ItemClassDescription
     * @var string
     */
    public $ItemClassDescription;
    /**
     * The SerialNumbers
     * @var string
     */
    public $SerialNumbers;
    /**
     * The SalesAcc
     * @var string
     */
    public $SalesAcc;
    /**
     * The CostAcc
     * @var string
     */
    public $CostAcc;
    /**
     * The Warranty
     * @var int
     */
    public $Warranty;
    /**
     * The Negative
     * @var string
     */
    public $Negative;
    /**
     * The BinLocation
     * @var string
     */
    public $BinLocation;
    /**
     * The Discount
     * @var double
     */
    public $Discount;
    /**
     * The Rebate
     * @var double
     */
    public $Rebate;
    /**
     * The LineComms
     * @var double
     */
    public $LineComms;
    /**
     * The Notes
     * @var string
     */
    public $Notes;
    /**
     * The PriceList
     * @var string
     */
    public $PriceList;
    /**
     * The WebList
     * @var string
     */
    public $WebList;
    /**
     * The SecurityLevel
     * @var string
     */
    public $SecurityLevel;
    /**
     * The SupplierAccNo
     * @var string
     */
    public $SupplierAccNo;
    /**
     * The SupplierName
     * @var string
     */
    public $SupplierName;
    /**
     * The SupplierItemNo
     * @var string
     */
    public $SupplierItemNo;
    /**
     * The SupplierReference
     * @var string
     */
    public $SupplierReference;
    /**
     * The VariableDescription
     * @var string
     */
    public $VariableDescription;
    /**
     * The Active
     * @var string
     */
    public $Active;
    /**
     * The UnitCost
     * @var double
     */
    public $UnitCost;
    /**
     * The LastPurchaseCost
     * @var double
     */
    public $LastPurchaseCost;
    /**
     * The PriceStructure
     * @var int
     */
    public $PriceStructure;
    /**
     * The SellingPrice1
     * @var double
     */
    public $SellingPrice1;
    /**
     * The SellingPrice2
     * @var double
     */
    public $SellingPrice2;
    /**
     * The SellingPrice3
     * @var double
     */
    public $SellingPrice3;
    /**
     * The SellingPrice4
     * @var double
     */
    public $SellingPrice4;
    /**
     * The SellingPrice5
     * @var double
     */
    public $SellingPrice5;
    /**
     * The SellingPrice6
     * @var double
     */
    public $SellingPrice6;
    /**
     * The TaxCode
     * @var int
     */
    public $TaxCode;
    /**
     * The TaxPercentage
     * @var double
     */
    public $TaxPercentage;
    /**
     * The MinMargin
     * @var double
     */
    public $MinMargin;
    /**
     * The Barcode
     * @var string
     */
    public $Barcode;
    /**
     * The URL
     * @var string
     */
    public $URL;
    /**
     * The Weight
     * @var double
     */
    public $Weight;
    /**
     * The BoxWidth
     * @var double
     */
    public $BoxWidth;
    /**
     * The BoxLength
     * @var double
     */
    public $BoxLength;
    /**
     * The BoxHeight
     * @var double
     */
    public $BoxHeight;
    /**
     * The BoxQuantity
     * @var double
     */
    public $BoxQuantity;
    /**
     * The SizeFactor
     * @var double
     */
    public $SizeFactor;
    /**
     * The Comment
     * @var string
     */
    public $Comment;
    /**
     * The MinOrderQuantity
     * @var int
     */
    public $MinOrderQuantity;
    /**
     * The Multiples
     * @var string
     */
    public $Multiples;
    /**
     * The AltDescription
     * @var string
     */
    public $AltDescription;
    /**
     * The TechnicianStock
     * @var double
     */
    public $TechnicianStock;
    /**
     * The WIPStock
     * @var double
     */
    public $WIPStock;
    /**
     * The ConsignmentStock
     * @var double
     */
    public $ConsignmentStock;
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
     * Constructor method for TStockRecord
     * @see parent::__construct()
     * @param string $_itemNo
     * @param string $_description
     * @param string $_itemType
     * @param string $_subItemType
     * @param string $_unitOfMeasure
     * @param string $_category
     * @param string $_catDescription
     * @param string $_catWebList
     * @param string $_brand
     * @param string $_brandDescription
     * @param string $_group
     * @param string $_groupDescription
     * @param string $_itemClass
     * @param string $_itemClassDescription
     * @param string $_serialNumbers
     * @param string $_salesAcc
     * @param string $_costAcc
     * @param int $_warranty
     * @param string $_negative
     * @param string $_binLocation
     * @param double $_discount
     * @param double $_rebate
     * @param double $_lineComms
     * @param string $_notes
     * @param string $_priceList
     * @param string $_webList
     * @param string $_securityLevel
     * @param string $_supplierAccNo
     * @param string $_supplierName
     * @param string $_supplierItemNo
     * @param string $_supplierReference
     * @param string $_variableDescription
     * @param string $_active
     * @param double $_unitCost
     * @param double $_lastPurchaseCost
     * @param int $_priceStructure
     * @param double $_sellingPrice1
     * @param double $_sellingPrice2
     * @param double $_sellingPrice3
     * @param double $_sellingPrice4
     * @param double $_sellingPrice5
     * @param double $_sellingPrice6
     * @param int $_taxCode
     * @param double $_taxPercentage
     * @param double $_minMargin
     * @param string $_barcode
     * @param string $_uRL
     * @param double $_weight
     * @param double $_boxWidth
     * @param double $_boxLength
     * @param double $_boxHeight
     * @param double $_boxQuantity
     * @param double $_sizeFactor
     * @param string $_comment
     * @param int $_minOrderQuantity
     * @param string $_multiples
     * @param string $_altDescription
     * @param double $_technicianStock
     * @param double $_wIPStock
     * @param double $_consignmentStock
     * @param string $_changeDate
     * @param string $_changeTime
     * @return TStockRecord
     */
    public function __construct($_itemNo = NULL,$_description = NULL,$_itemType = NULL,$_subItemType = NULL,$_unitOfMeasure = NULL,$_category = NULL,$_catDescription = NULL, $_catWebList = NULL,$_brand = NULL,$_brandDescription = NULL,$_group = NULL,$_groupDescription = NULL,$_itemClass = NULL,$_itemClassDescription = NULL,$_serialNumbers = NULL,$_salesAcc = NULL,$_costAcc = NULL,$_warranty = NULL,$_negative = NULL,$_binLocation = NULL,$_discount = NULL,$_rebate = NULL,$_lineComms = NULL,$_notes = NULL,$_priceList = NULL,$_webList = NULL,$_securityLevel = NULL,$_supplierAccNo = NULL,$_supplierName = NULL,$_supplierItemNo = NULL,$_supplierReference = NULL,$_variableDescription = NULL,$_active = NULL,$_unitCost = NULL,$_lastPurchaseCost = NULL,$_priceStructure = NULL,$_sellingPrice1 = NULL,$_sellingPrice2 = NULL,$_sellingPrice3 = NULL,$_sellingPrice4 = NULL,$_sellingPrice5 = NULL,$_sellingPrice6 = NULL,$_taxCode = NULL,$_taxPercentage = NULL,$_minMargin = NULL,$_barcode = NULL,$_uRL = NULL,$_weight = NULL,$_boxWidth = NULL,$_boxLength = NULL,$_boxHeight = NULL,$_boxQuantity = NULL,$_sizeFactor = NULL,$_comment = NULL,$_minOrderQuantity = NULL,$_multiples = NULL,$_altDescription = NULL,$_technicianStock = NULL,$_wIPStock = NULL,$_consignmentStock = NULL,$_changeDate = NULL,$_changeTime = NULL)
    {
      $this->ItemNo=$_itemNo;
      $this->Description=$_description;
      $this->ItemType=$_itemType;
      $this->SubItemType=$_subItemType;
      $this->UnitOfMeasure=$_unitOfMeasure;
      $this->Category=$_category;
      $this->CatDescription=$_catDescription;
      $this->CatWebList=$_catWebList;
      $this->Brand=$_brand;
      $this->BrandDescription=$_brandDescription;
      $this->Group=$_group;
      $this->GroupDescription=$_groupDescription;
      $this->ItemClass=$_itemClass;
      $this->ItemClassDescription=$_itemClassDescription;
      $this->SerialNumbers=$_serialNumbers;
      $this->SalesAcc=$_salesAcc;
      $this->CostAcc=$_costAcc;
      $this->Warranty=$_warranty;
      $this->Negative=$_negative;
      $this->BinLocation=$_binLocation;
      $this->Discount=$_discount;
      $this->Rebate=$_rebate;
      $this->LineComms=$_lineComms;
      $this->Notes=$_notes;
      $this->PriceList=$_priceList;
      $this->WebList=$_webList;
      $this->SecurityLevel=$_securityLevel;
      $this->SupplierAccNo=$_supplierAccNo;
      $this->SupplierName=$_supplierName;
      $this->SupplierItemNo=$_supplierItemNo;
      $this->SupplierReference=$_supplierReference;
      $this->VariableDescription=$_variableDescription;
      $this->Active=$_active;
      $this->UnitCost=$_unitCost;
      $this->LastPurchaseCost=$_lastPurchaseCost;
      $this->PriceStructure=$_priceStructure;
      $this->SellingPrice1=$_sellingPrice1;
      $this->SellingPrice2=$_sellingPrice2;
      $this->SellingPrice3=$_sellingPrice3;
      $this->SellingPrice4=$_sellingPrice4;
      $this->SellingPrice5=$_sellingPrice5;
      $this->SellingPrice6=$_sellingPrice6;
      $this->TaxCode=$_taxCode;
      $this->TaxPercentage=$_taxPercentage;
      $this->MinMargin=$_minMargin;
      $this->Barcode=$_barcode;
      $this->URL=$_uRL;
      $this->Weight=$_weight;
      $this->BoxWidth=$_boxWidth;
      $this->BoxLength=$_boxLength;
      $this->BoxHeight=$_boxHeight;
      $this->BoxQuantity=$_boxQuantity;
      $this->SizeFactor=$_sizeFactor;
      $this->Comment=$_comment;
      $this->MinOrderQuantity=$_minOrderQuantity;
      $this->Multiples=$_multiples;
      $this->AltDescription=$_altDescription;
      $this->TechnicianStock=$_technicianStock;
      $this->WIPStock=$_wIPStock;
      $this->ConsignmentStock=$_consignmentStock;
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
     * Get ItemType value
     * @return string|null
     */
    public function getItemType()
    {
        return $this->ItemType;
    }
    /**
     * Set ItemType value
     * @param string $_itemType the ItemType
     * @return string
     */
    public function setItemType($_itemType)
    {
        return ($this->ItemType = $_itemType);
    }
    /**
     * Get SubItemType value
     * @return string|null
     */
    public function getSubItemType()
    {
        return $this->SubItemType;
    }
    /**
     * Set SubItemType value
     * @param string $_subItemType the SubItemType
     * @return string
     */
    public function setSubItemType($_subItemType)
    {
        return ($this->SubItemType = $_subItemType);
    }
    /**
     * Get UnitOfMeasure value
     * @return string|null
     */
    public function getUnitOfMeasure()
    {
        return $this->UnitOfMeasure;
    }
    /**
     * Set UnitOfMeasure value
     * @param string $_unitOfMeasure the UnitOfMeasure
     * @return string
     */
    public function setUnitOfMeasure($_unitOfMeasure)
    {
        return ($this->UnitOfMeasure = $_unitOfMeasure);
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $_category the Category
     * @return string
     */
    public function setCategory($_category)
    {
        return ($this->Category = $_category);
    }
    /**
     * Get CatDescription value
     * @return string|null
     */
    public function getCatDescription()
    {
        return $this->CatDescription;
    }
    /**
     * Set CatDescription value
     * @param string $_catDescription the CatDescription
     * @return string
     */
    public function setCatDescription($_catDescription)
    {
        return ($this->CatDescription = $_catDescription);
    }


    /**
     * Get CatWebList value
     * @return string|null
     */
    public function getCatWebList()
    {
        return $this->CatWebList;
    }
    /**
     * Set CatWebList value
     * @param string $_catWebList the CatWebList
     * @return string
     */
    public function setCatWebList($_catWebList)
    {
        return ($this->CatWebList = $_catWebList);
    }


    /**
     * Get Brand value
     * @return string|null
     */
    public function getBrand()
    {
        return $this->Brand;
    }
    /**
     * Set Brand value
     * @param string $_brand the Brand
     * @return string
     */
    public function setBrand($_brand)
    {
        return ($this->Brand = $_brand);
    }
    /**
     * Get BrandDescription value
     * @return string|null
     */
    public function getBrandDescription()
    {
        return $this->BrandDescription;
    }
    /**
     * Set BrandDescription value
     * @param string $_brandDescription the BrandDescription
     * @return string
     */
    public function setBrandDescription($_brandDescription)
    {
        return ($this->BrandDescription = $_brandDescription);
    }
    /**
     * Get Group value
     * @return string|null
     */
    public function getGroup()
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param string $_group the Group
     * @return string
     */
    public function setGroup($_group)
    {
        return ($this->Group = $_group);
    }
    /**
     * Get GroupDescription value
     * @return string|null
     */
    public function getGroupDescription()
    {
        return $this->GroupDescription;
    }
    /**
     * Set GroupDescription value
     * @param string $_groupDescription the GroupDescription
     * @return string
     */
    public function setGroupDescription($_groupDescription)
    {
        return ($this->GroupDescription = $_groupDescription);
    }
    /**
     * Get ItemClass value
     * @return string|null
     */
    public function getItemClass()
    {
        return $this->ItemClass;
    }
    /**
     * Set ItemClass value
     * @param string $_itemClass the ItemClass
     * @return string
     */
    public function setItemClass($_itemClass)
    {
        return ($this->ItemClass = $_itemClass);
    }
    /**
     * Get ItemClassDescription value
     * @return string|null
     */
    public function getItemClassDescription()
    {
        return $this->ItemClassDescription;
    }
    /**
     * Set ItemClassDescription value
     * @param string $_itemClassDescription the ItemClassDescription
     * @return string
     */
    public function setItemClassDescription($_itemClassDescription)
    {
        return ($this->ItemClassDescription = $_itemClassDescription);
    }
    /**
     * Get SerialNumbers value
     * @return string|null
     */
    public function getSerialNumbers()
    {
        return $this->SerialNumbers;
    }
    /**
     * Set SerialNumbers value
     * @param string $_serialNumbers the SerialNumbers
     * @return string
     */
    public function setSerialNumbers($_serialNumbers)
    {
        return ($this->SerialNumbers = $_serialNumbers);
    }
    /**
     * Get SalesAcc value
     * @return string|null
     */
    public function getSalesAcc()
    {
        return $this->SalesAcc;
    }
    /**
     * Set SalesAcc value
     * @param string $_salesAcc the SalesAcc
     * @return string
     */
    public function setSalesAcc($_salesAcc)
    {
        return ($this->SalesAcc = $_salesAcc);
    }
    /**
     * Get CostAcc value
     * @return string|null
     */
    public function getCostAcc()
    {
        return $this->CostAcc;
    }
    /**
     * Set CostAcc value
     * @param string $_costAcc the CostAcc
     * @return string
     */
    public function setCostAcc($_costAcc)
    {
        return ($this->CostAcc = $_costAcc);
    }
    /**
     * Get Warranty value
     * @return int|null
     */
    public function getWarranty()
    {
        return $this->Warranty;
    }
    /**
     * Set Warranty value
     * @param int $_warranty the Warranty
     * @return int
     */
    public function setWarranty($_warranty)
    {
        return ($this->Warranty = $_warranty);
    }
    /**
     * Get Negative value
     * @return string|null
     */
    public function getNegative()
    {
        return $this->Negative;
    }
    /**
     * Set Negative value
     * @param string $_negative the Negative
     * @return string
     */
    public function setNegative($_negative)
    {
        return ($this->Negative = $_negative);
    }
    /**
     * Get BinLocation value
     * @return string|null
     */
    public function getBinLocation()
    {
        return $this->BinLocation;
    }
    /**
     * Set BinLocation value
     * @param string $_binLocation the BinLocation
     * @return string
     */
    public function setBinLocation($_binLocation)
    {
        return ($this->BinLocation = $_binLocation);
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
     * Get LineComms value
     * @return double|null
     */
    public function getLineComms()
    {
        return $this->LineComms;
    }
    /**
     * Set LineComms value
     * @param double $_lineComms the LineComms
     * @return double
     */
    public function setLineComms($_lineComms)
    {
        return ($this->LineComms = $_lineComms);
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
     * Get PriceList value
     * @return string|null
     */
    public function getPriceList()
    {
        return $this->PriceList;
    }
    /**
     * Set PriceList value
     * @param string $_priceList the PriceList
     * @return string
     */
    public function setPriceList($_priceList)
    {
        return ($this->PriceList = $_priceList);
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
     * Get SupplierAccNo value
     * @return string|null
     */
    public function getSupplierAccNo()
    {
        return $this->SupplierAccNo;
    }
    /**
     * Set SupplierAccNo value
     * @param string $_supplierAccNo the SupplierAccNo
     * @return string
     */
    public function setSupplierAccNo($_supplierAccNo)
    {
        return ($this->SupplierAccNo = $_supplierAccNo);
    }
    /**
     * Get SupplierName value
     * @return string|null
     */
    public function getSupplierName()
    {
        return $this->SupplierName;
    }
    /**
     * Set SupplierName value
     * @param string $_supplierName the SupplierName
     * @return string
     */
    public function setSupplierName($_supplierName)
    {
        return ($this->SupplierName = $_supplierName);
    }
    /**
     * Get SupplierItemNo value
     * @return string|null
     */
    public function getSupplierItemNo()
    {
        return $this->SupplierItemNo;
    }
    /**
     * Set SupplierItemNo value
     * @param string $_supplierItemNo the SupplierItemNo
     * @return string
     */
    public function setSupplierItemNo($_supplierItemNo)
    {
        return ($this->SupplierItemNo = $_supplierItemNo);
    }
    /**
     * Get SupplierReference value
     * @return string|null
     */
    public function getSupplierReference()
    {
        return $this->SupplierReference;
    }
    /**
     * Set SupplierReference value
     * @param string $_supplierReference the SupplierReference
     * @return string
     */
    public function setSupplierReference($_supplierReference)
    {
        return ($this->SupplierReference = $_supplierReference);
    }
    /**
     * Get VariableDescription value
     * @return string|null
     */
    public function getVariableDescription()
    {
        return $this->VariableDescription;
    }
    /**
     * Set VariableDescription value
     * @param string $_variableDescription the VariableDescription
     * @return string
     */
    public function setVariableDescription($_variableDescription)
    {
        return ($this->VariableDescription = $_variableDescription);
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
     * Get UnitCost value
     * @return double|null
     */
    public function getUnitCost()
    {
        return $this->UnitCost;
    }
    /**
     * Set UnitCost value
     * @param double $_unitCost the UnitCost
     * @return double
     */
    public function setUnitCost($_unitCost)
    {
        return ($this->UnitCost = $_unitCost);
    }
    /**
     * Get LastPurchaseCost value
     * @return double|null
     */
    public function getLastPurchaseCost()
    {
        return $this->LastPurchaseCost;
    }
    /**
     * Set LastPurchaseCost value
     * @param double $_lastPurchaseCost the LastPurchaseCost
     * @return double
     */
    public function setLastPurchaseCost($_lastPurchaseCost)
    {
        return ($this->LastPurchaseCost = $_lastPurchaseCost);
    }
    /**
     * Get PriceStructure value
     * @return int|null
     */
    public function getPriceStructure()
    {
        return $this->PriceStructure;
    }
    /**
     * Set PriceStructure value
     * @param int $_priceStructure the PriceStructure
     * @return int
     */
    public function setPriceStructure($_priceStructure)
    {
        return ($this->PriceStructure = $_priceStructure);
    }
    /**
     * Get SellingPrice1 value
     * @return double|null
     */
    public function getSellingPrice1()
    {
        return $this->SellingPrice1;
    }
    /**
     * Set SellingPrice1 value
     * @param double $_sellingPrice1 the SellingPrice1
     * @return double
     */
    public function setSellingPrice1($_sellingPrice1)
    {
        return ($this->SellingPrice1 = $_sellingPrice1);
    }
    /**
     * Get SellingPrice2 value
     * @return double|null
     */
    public function getSellingPrice2()
    {
        return $this->SellingPrice2;
    }
    /**
     * Set SellingPrice2 value
     * @param double $_sellingPrice2 the SellingPrice2
     * @return double
     */
    public function setSellingPrice2($_sellingPrice2)
    {
        return ($this->SellingPrice2 = $_sellingPrice2);
    }
    /**
     * Get SellingPrice3 value
     * @return double|null
     */
    public function getSellingPrice3()
    {
        return $this->SellingPrice3;
    }
    /**
     * Set SellingPrice3 value
     * @param double $_sellingPrice3 the SellingPrice3
     * @return double
     */
    public function setSellingPrice3($_sellingPrice3)
    {
        return ($this->SellingPrice3 = $_sellingPrice3);
    }
    /**
     * Get SellingPrice4 value
     * @return double|null
     */
    public function getSellingPrice4()
    {
        return $this->SellingPrice4;
    }
    /**
     * Set SellingPrice4 value
     * @param double $_sellingPrice4 the SellingPrice4
     * @return double
     */
    public function setSellingPrice4($_sellingPrice4)
    {
        return ($this->SellingPrice4 = $_sellingPrice4);
    }
    /**
     * Get SellingPrice5 value
     * @return double|null
     */
    public function getSellingPrice5()
    {
        return $this->SellingPrice5;
    }
    /**
     * Set SellingPrice5 value
     * @param double $_sellingPrice5 the SellingPrice5
     * @return double
     */
    public function setSellingPrice5($_sellingPrice5)
    {
        return ($this->SellingPrice5 = $_sellingPrice5);
    }
    /**
     * Get SellingPrice6 value
     * @return double|null
     */
    public function getSellingPrice6()
    {
        return $this->SellingPrice6;
    }
    /**
     * Set SellingPrice6 value
     * @param double $_sellingPrice6 the SellingPrice6
     * @return double
     */
    public function setSellingPrice6($_sellingPrice6)
    {
        return ($this->SellingPrice6 = $_sellingPrice6);
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
     * Get TaxPercentage value
     * @return double|null
     */
    public function getTaxPercentage()
    {
        return $this->TaxPercentage;
    }
    /**
     * Set TaxPercentage value
     * @param double $_taxPercentage the TaxPercentage
     * @return double
     */
    public function setTaxPercentage($_taxPercentage)
    {
        return ($this->TaxPercentage = $_taxPercentage);
    }
    /**
     * Get MinMargin value
     * @return double|null
     */
    public function getMinMargin()
    {
        return $this->MinMargin;
    }
    /**
     * Set MinMargin value
     * @param double $_minMargin the MinMargin
     * @return double
     */
    public function setMinMargin($_minMargin)
    {
        return ($this->MinMargin = $_minMargin);
    }
    /**
     * Get Barcode value
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }
    /**
     * Set Barcode value
     * @param string $_barcode the Barcode
     * @return string
     */
    public function setBarcode($_barcode)
    {
        return ($this->Barcode = $_barcode);
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $_uRL the URL
     * @return string
     */
    public function setURL($_uRL)
    {
        return ($this->URL = $_uRL);
    }
    /**
     * Get Weight value
     * @return double|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param double $_weight the Weight
     * @return double
     */
    public function setWeight($_weight)
    {
        return ($this->Weight = $_weight);
    }
    /**
     * Get BoxWidth value
     * @return double|null
     */
    public function getBoxWidth()
    {
        return $this->BoxWidth;
    }
    /**
     * Set BoxWidth value
     * @param double $_boxWidth the BoxWidth
     * @return double
     */
    public function setBoxWidth($_boxWidth)
    {
        return ($this->BoxWidth = $_boxWidth);
    }
    /**
     * Get BoxLength value
     * @return double|null
     */
    public function getBoxLength()
    {
        return $this->BoxLength;
    }
    /**
     * Set BoxLength value
     * @param double $_boxLength the BoxLength
     * @return double
     */
    public function setBoxLength($_boxLength)
    {
        return ($this->BoxLength = $_boxLength);
    }
    /**
     * Get BoxHeight value
     * @return double|null
     */
    public function getBoxHeight()
    {
        return $this->BoxHeight;
    }
    /**
     * Set BoxHeight value
     * @param double $_boxHeight the BoxHeight
     * @return double
     */
    public function setBoxHeight($_boxHeight)
    {
        return ($this->BoxHeight = $_boxHeight);
    }
    /**
     * Get BoxQuantity value
     * @return double|null
     */
    public function getBoxQuantity()
    {
        return $this->BoxQuantity;
    }
    /**
     * Set BoxQuantity value
     * @param double $_boxQuantity the BoxQuantity
     * @return double
     */
    public function setBoxQuantity($_boxQuantity)
    {
        return ($this->BoxQuantity = $_boxQuantity);
    }
    /**
     * Get SizeFactor value
     * @return double|null
     */
    public function getSizeFactor()
    {
        return $this->SizeFactor;
    }
    /**
     * Set SizeFactor value
     * @param double $_sizeFactor the SizeFactor
     * @return double
     */
    public function setSizeFactor($_sizeFactor)
    {
        return ($this->SizeFactor = $_sizeFactor);
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
     * Get MinOrderQuantity value
     * @return int|null
     */
    public function getMinOrderQuantity()
    {
        return $this->MinOrderQuantity;
    }
    /**
     * Set MinOrderQuantity value
     * @param int $_minOrderQuantity the MinOrderQuantity
     * @return int
     */
    public function setMinOrderQuantity($_minOrderQuantity)
    {
        return ($this->MinOrderQuantity = $_minOrderQuantity);
    }
    /**
     * Get Multiples value
     * @return string|null
     */
    public function getMultiples()
    {
        return $this->Multiples;
    }
    /**
     * Set Multiples value
     * @param string $_multiples the Multiples
     * @return string
     */
    public function setMultiples($_multiples)
    {
        return ($this->Multiples = $_multiples);
    }
    /**
     * Get AltDescription value
     * @return string|null
     */
    public function getAltDescription()
    {
        return $this->AltDescription;
    }
    /**
     * Set AltDescription value
     * @param string $_altDescription the AltDescription
     * @return string
     */
    public function setAltDescription($_altDescription)
    {
        return ($this->AltDescription = $_altDescription);
    }
    /**
     * Get TechnicianStock value
     * @return double|null
     */
    public function getTechnicianStock()
    {
        return $this->TechnicianStock;
    }
    /**
     * Set TechnicianStock value
     * @param double $_technicianStock the TechnicianStock
     * @return double
     */
    public function setTechnicianStock($_technicianStock)
    {
        return ($this->TechnicianStock = $_technicianStock);
    }
    /**
     * Get WIPStock value
     * @return double|null
     */
    public function getWIPStock()
    {
        return $this->WIPStock;
    }
    /**
     * Set WIPStock value
     * @param double $_wIPStock the WIPStock
     * @return double
     */
    public function setWIPStock($_wIPStock)
    {
        return ($this->WIPStock = $_wIPStock);
    }
    /**
     * Get ConsignmentStock value
     * @return double|null
     */
    public function getConsignmentStock()
    {
        return $this->ConsignmentStock;
    }
    /**
     * Set ConsignmentStock value
     * @param double $_consignmentStock the ConsignmentStock
     * @return double
     */
    public function setConsignmentStock($_consignmentStock)
    {
        return ($this->ConsignmentStock = $_consignmentStock);
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
