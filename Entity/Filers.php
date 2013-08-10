<?php

namespace Bangpound\CorpWatch\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filers
 *
 * @ORM\Table(name="filers")
 * @ORM\Entity
 */
class Filers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="filing_id", type="integer", nullable=false)
     */
    private $filingId;

    /**
     * @var integer
     *
     * @ORM\Column(name="cik", type="integer", nullable=true)
     */
    private $cik;

    /**
     * @var integer
     *
     * @ORM\Column(name="irs_number", type="integer", nullable=true)
     */
    private $irsNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="conformed_name", type="string", length=300, nullable=true)
     */
    private $conformedName;

    /**
     * @var integer
     *
     * @ORM\Column(name="fiscal_year_end", type="smallint", nullable=true)
     */
    private $fiscalYearEnd;

    /**
     * @var integer
     *
     * @ORM\Column(name="sic_code", type="integer", nullable=true)
     */
    private $sicCode;

    /**
     * @var string
     *
     * @ORM\Column(name="business_street_1", type="string", length=300, nullable=true)
     */
    private $businessStreet1;

    /**
     * @var string
     *
     * @ORM\Column(name="business_street_2", type="string", length=300, nullable=true)
     */
    private $businessStreet2;

    /**
     * @var string
     *
     * @ORM\Column(name="business_city", type="string", length=100, nullable=true)
     */
    private $businessCity;

    /**
     * @var string
     *
     * @ORM\Column(name="business_state", type="string", length=40, nullable=true)
     */
    private $businessState;

    /**
     * @var string
     *
     * @ORM\Column(name="business_zip", type="string", length=11, nullable=true)
     */
    private $businessZip;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_street_1", type="string", length=300, nullable=true)
     */
    private $mailStreet1;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_street_2", type="string", length=300, nullable=true)
     */
    private $mailStreet2;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_city", type="string", length=100, nullable=true)
     */
    private $mailCity;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_state", type="string", length=40, nullable=true)
     */
    private $mailState;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_zip", type="string", length=11, nullable=true)
     */
    private $mailZip;

    /**
     * @var string
     *
     * @ORM\Column(name="form_type", type="string", length=10, nullable=true)
     */
    private $formType;

    /**
     * @var string
     *
     * @ORM\Column(name="sec_act", type="string", length=30, nullable=true)
     */
    private $secAct;

    /**
     * @var string
     *
     * @ORM\Column(name="sec_file_number", type="string", length=30, nullable=true)
     */
    private $secFileNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="film_number", type="integer", nullable=true)
     */
    private $filmNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="former_name", type="string", length=300, nullable=true)
     */
    private $formerName;

    /**
     * @var string
     *
     * @ORM\Column(name="name_change_date", type="string", length=15, nullable=true)
     */
    private $nameChangeDate;

    /**
     * @var string
     *
     * @ORM\Column(name="state_of_incorporation", type="string", length=40, nullable=true)
     */
    private $stateOfIncorporation;

    /**
     * @var string
     *
     * @ORM\Column(name="business_phone", type="string", length=30, nullable=true)
     */
    private $businessPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="match_name", type="string", length=300, nullable=true)
     */
    private $matchName;

    /**
     * @var string
     *
     * @ORM\Column(name="incorp_country_code", type="string", length=2, nullable=true)
     */
    private $incorpCountryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="incorp_subdiv_code", type="string", length=3, nullable=true)
     */
    private $incorpSubdivCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="cw_id", type="integer", nullable=true)
     */
    private $cwId;

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_raw_address", type="string", length=500, nullable=true)
     */
    private $mailRawAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="business_raw_address", type="string", length=500, nullable=true)
     */
    private $businessRawAddress;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bad_cik", type="boolean", nullable=true)
     */
    private $badCik;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sec_21", type="boolean", nullable=true)
     */
    private $sec21;

    /**
     * @var integer
     *
     * @ORM\Column(name="filer_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $filerId;



    /**
     * Set filingId
     *
     * @param integer $filingId
     * @return Filers
     */
    public function setFilingId($filingId)
    {
        $this->filingId = $filingId;
    
        return $this;
    }

    /**
     * Get filingId
     *
     * @return integer 
     */
    public function getFilingId()
    {
        return $this->filingId;
    }

    /**
     * Set cik
     *
     * @param integer $cik
     * @return Filers
     */
    public function setCik($cik)
    {
        $this->cik = $cik;
    
        return $this;
    }

    /**
     * Get cik
     *
     * @return integer 
     */
    public function getCik()
    {
        return $this->cik;
    }

    /**
     * Set irsNumber
     *
     * @param integer $irsNumber
     * @return Filers
     */
    public function setIrsNumber($irsNumber)
    {
        $this->irsNumber = $irsNumber;
    
        return $this;
    }

    /**
     * Get irsNumber
     *
     * @return integer 
     */
    public function getIrsNumber()
    {
        return $this->irsNumber;
    }

    /**
     * Set conformedName
     *
     * @param string $conformedName
     * @return Filers
     */
    public function setConformedName($conformedName)
    {
        $this->conformedName = $conformedName;
    
        return $this;
    }

    /**
     * Get conformedName
     *
     * @return string 
     */
    public function getConformedName()
    {
        return $this->conformedName;
    }

    /**
     * Set fiscalYearEnd
     *
     * @param integer $fiscalYearEnd
     * @return Filers
     */
    public function setFiscalYearEnd($fiscalYearEnd)
    {
        $this->fiscalYearEnd = $fiscalYearEnd;
    
        return $this;
    }

    /**
     * Get fiscalYearEnd
     *
     * @return integer 
     */
    public function getFiscalYearEnd()
    {
        return $this->fiscalYearEnd;
    }

    /**
     * Set sicCode
     *
     * @param integer $sicCode
     * @return Filers
     */
    public function setSicCode($sicCode)
    {
        $this->sicCode = $sicCode;
    
        return $this;
    }

    /**
     * Get sicCode
     *
     * @return integer 
     */
    public function getSicCode()
    {
        return $this->sicCode;
    }

    /**
     * Set businessStreet1
     *
     * @param string $businessStreet1
     * @return Filers
     */
    public function setBusinessStreet1($businessStreet1)
    {
        $this->businessStreet1 = $businessStreet1;
    
        return $this;
    }

    /**
     * Get businessStreet1
     *
     * @return string 
     */
    public function getBusinessStreet1()
    {
        return $this->businessStreet1;
    }

    /**
     * Set businessStreet2
     *
     * @param string $businessStreet2
     * @return Filers
     */
    public function setBusinessStreet2($businessStreet2)
    {
        $this->businessStreet2 = $businessStreet2;
    
        return $this;
    }

    /**
     * Get businessStreet2
     *
     * @return string 
     */
    public function getBusinessStreet2()
    {
        return $this->businessStreet2;
    }

    /**
     * Set businessCity
     *
     * @param string $businessCity
     * @return Filers
     */
    public function setBusinessCity($businessCity)
    {
        $this->businessCity = $businessCity;
    
        return $this;
    }

    /**
     * Get businessCity
     *
     * @return string 
     */
    public function getBusinessCity()
    {
        return $this->businessCity;
    }

    /**
     * Set businessState
     *
     * @param string $businessState
     * @return Filers
     */
    public function setBusinessState($businessState)
    {
        $this->businessState = $businessState;
    
        return $this;
    }

    /**
     * Get businessState
     *
     * @return string 
     */
    public function getBusinessState()
    {
        return $this->businessState;
    }

    /**
     * Set businessZip
     *
     * @param string $businessZip
     * @return Filers
     */
    public function setBusinessZip($businessZip)
    {
        $this->businessZip = $businessZip;
    
        return $this;
    }

    /**
     * Get businessZip
     *
     * @return string 
     */
    public function getBusinessZip()
    {
        return $this->businessZip;
    }

    /**
     * Set mailStreet1
     *
     * @param string $mailStreet1
     * @return Filers
     */
    public function setMailStreet1($mailStreet1)
    {
        $this->mailStreet1 = $mailStreet1;
    
        return $this;
    }

    /**
     * Get mailStreet1
     *
     * @return string 
     */
    public function getMailStreet1()
    {
        return $this->mailStreet1;
    }

    /**
     * Set mailStreet2
     *
     * @param string $mailStreet2
     * @return Filers
     */
    public function setMailStreet2($mailStreet2)
    {
        $this->mailStreet2 = $mailStreet2;
    
        return $this;
    }

    /**
     * Get mailStreet2
     *
     * @return string 
     */
    public function getMailStreet2()
    {
        return $this->mailStreet2;
    }

    /**
     * Set mailCity
     *
     * @param string $mailCity
     * @return Filers
     */
    public function setMailCity($mailCity)
    {
        $this->mailCity = $mailCity;
    
        return $this;
    }

    /**
     * Get mailCity
     *
     * @return string 
     */
    public function getMailCity()
    {
        return $this->mailCity;
    }

    /**
     * Set mailState
     *
     * @param string $mailState
     * @return Filers
     */
    public function setMailState($mailState)
    {
        $this->mailState = $mailState;
    
        return $this;
    }

    /**
     * Get mailState
     *
     * @return string 
     */
    public function getMailState()
    {
        return $this->mailState;
    }

    /**
     * Set mailZip
     *
     * @param string $mailZip
     * @return Filers
     */
    public function setMailZip($mailZip)
    {
        $this->mailZip = $mailZip;
    
        return $this;
    }

    /**
     * Get mailZip
     *
     * @return string 
     */
    public function getMailZip()
    {
        return $this->mailZip;
    }

    /**
     * Set formType
     *
     * @param string $formType
     * @return Filers
     */
    public function setFormType($formType)
    {
        $this->formType = $formType;
    
        return $this;
    }

    /**
     * Get formType
     *
     * @return string 
     */
    public function getFormType()
    {
        return $this->formType;
    }

    /**
     * Set secAct
     *
     * @param string $secAct
     * @return Filers
     */
    public function setSecAct($secAct)
    {
        $this->secAct = $secAct;
    
        return $this;
    }

    /**
     * Get secAct
     *
     * @return string 
     */
    public function getSecAct()
    {
        return $this->secAct;
    }

    /**
     * Set secFileNumber
     *
     * @param string $secFileNumber
     * @return Filers
     */
    public function setSecFileNumber($secFileNumber)
    {
        $this->secFileNumber = $secFileNumber;
    
        return $this;
    }

    /**
     * Get secFileNumber
     *
     * @return string 
     */
    public function getSecFileNumber()
    {
        return $this->secFileNumber;
    }

    /**
     * Set filmNumber
     *
     * @param integer $filmNumber
     * @return Filers
     */
    public function setFilmNumber($filmNumber)
    {
        $this->filmNumber = $filmNumber;
    
        return $this;
    }

    /**
     * Get filmNumber
     *
     * @return integer 
     */
    public function getFilmNumber()
    {
        return $this->filmNumber;
    }

    /**
     * Set formerName
     *
     * @param string $formerName
     * @return Filers
     */
    public function setFormerName($formerName)
    {
        $this->formerName = $formerName;
    
        return $this;
    }

    /**
     * Get formerName
     *
     * @return string 
     */
    public function getFormerName()
    {
        return $this->formerName;
    }

    /**
     * Set nameChangeDate
     *
     * @param string $nameChangeDate
     * @return Filers
     */
    public function setNameChangeDate($nameChangeDate)
    {
        $this->nameChangeDate = $nameChangeDate;
    
        return $this;
    }

    /**
     * Get nameChangeDate
     *
     * @return string 
     */
    public function getNameChangeDate()
    {
        return $this->nameChangeDate;
    }

    /**
     * Set stateOfIncorporation
     *
     * @param string $stateOfIncorporation
     * @return Filers
     */
    public function setStateOfIncorporation($stateOfIncorporation)
    {
        $this->stateOfIncorporation = $stateOfIncorporation;
    
        return $this;
    }

    /**
     * Get stateOfIncorporation
     *
     * @return string 
     */
    public function getStateOfIncorporation()
    {
        return $this->stateOfIncorporation;
    }

    /**
     * Set businessPhone
     *
     * @param string $businessPhone
     * @return Filers
     */
    public function setBusinessPhone($businessPhone)
    {
        $this->businessPhone = $businessPhone;
    
        return $this;
    }

    /**
     * Get businessPhone
     *
     * @return string 
     */
    public function getBusinessPhone()
    {
        return $this->businessPhone;
    }

    /**
     * Set matchName
     *
     * @param string $matchName
     * @return Filers
     */
    public function setMatchName($matchName)
    {
        $this->matchName = $matchName;
    
        return $this;
    }

    /**
     * Get matchName
     *
     * @return string 
     */
    public function getMatchName()
    {
        return $this->matchName;
    }

    /**
     * Set incorpCountryCode
     *
     * @param string $incorpCountryCode
     * @return Filers
     */
    public function setIncorpCountryCode($incorpCountryCode)
    {
        $this->incorpCountryCode = $incorpCountryCode;
    
        return $this;
    }

    /**
     * Get incorpCountryCode
     *
     * @return string 
     */
    public function getIncorpCountryCode()
    {
        return $this->incorpCountryCode;
    }

    /**
     * Set incorpSubdivCode
     *
     * @param string $incorpSubdivCode
     * @return Filers
     */
    public function setIncorpSubdivCode($incorpSubdivCode)
    {
        $this->incorpSubdivCode = $incorpSubdivCode;
    
        return $this;
    }

    /**
     * Get incorpSubdivCode
     *
     * @return string 
     */
    public function getIncorpSubdivCode()
    {
        return $this->incorpSubdivCode;
    }

    /**
     * Set cwId
     *
     * @param integer $cwId
     * @return Filers
     */
    public function setCwId($cwId)
    {
        $this->cwId = $cwId;
    
        return $this;
    }

    /**
     * Get cwId
     *
     * @return integer 
     */
    public function getCwId()
    {
        return $this->cwId;
    }

    /**
     * Set year
     *
     * @param integer $year
     * @return Filers
     */
    public function setYear($year)
    {
        $this->year = $year;
    
        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set mailRawAddress
     *
     * @param string $mailRawAddress
     * @return Filers
     */
    public function setMailRawAddress($mailRawAddress)
    {
        $this->mailRawAddress = $mailRawAddress;
    
        return $this;
    }

    /**
     * Get mailRawAddress
     *
     * @return string 
     */
    public function getMailRawAddress()
    {
        return $this->mailRawAddress;
    }

    /**
     * Set businessRawAddress
     *
     * @param string $businessRawAddress
     * @return Filers
     */
    public function setBusinessRawAddress($businessRawAddress)
    {
        $this->businessRawAddress = $businessRawAddress;
    
        return $this;
    }

    /**
     * Get businessRawAddress
     *
     * @return string 
     */
    public function getBusinessRawAddress()
    {
        return $this->businessRawAddress;
    }

    /**
     * Set badCik
     *
     * @param boolean $badCik
     * @return Filers
     */
    public function setBadCik($badCik)
    {
        $this->badCik = $badCik;
    
        return $this;
    }

    /**
     * Get badCik
     *
     * @return boolean 
     */
    public function getBadCik()
    {
        return $this->badCik;
    }

    /**
     * Set sec21
     *
     * @param boolean $sec21
     * @return Filers
     */
    public function setSec21($sec21)
    {
        $this->sec21 = $sec21;
    
        return $this;
    }

    /**
     * Get sec21
     *
     * @return boolean 
     */
    public function getSec21()
    {
        return $this->sec21;
    }

    /**
     * Get filerId
     *
     * @return integer 
     */
    public function getFilerId()
    {
        return $this->filerId;
    }
}