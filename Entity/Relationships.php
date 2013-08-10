<?php

namespace Bangpound\CorpWatch\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relationships
 *
 * @ORM\Table(name="relationships")
 * @ORM\Entity
 */
class Relationships
{
    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=300, nullable=true)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=200, nullable=false)
     */
    private $location;

    /**
     * @var integer
     *
     * @ORM\Column(name="filing_id", type="integer", nullable=false)
     */
    private $filingId;

    /**
     * @var string
     *
     * @ORM\Column(name="country_code", type="string", length=2, nullable=true)
     */
    private $countryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="subdiv_code", type="string", length=3, nullable=true)
     */
    private $subdivCode;

    /**
     * @var string
     *
     * @ORM\Column(name="clean_company", type="string", length=300, nullable=true)
     */
    private $cleanCompany;

    /**
     * @var integer
     *
     * @ORM\Column(name="cik", type="integer", nullable=true)
     */
    private $cik;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ignore_record", type="boolean", nullable=true)
     */
    private $ignoreRecord;

    /**
     * @var string
     *
     * @ORM\Column(name="parse_method", type="string", length=100, nullable=true)
     */
    private $parseMethod;

    /**
     * @var integer
     *
     * @ORM\Column(name="hierarchy", type="integer", nullable=true)
     */
    private $hierarchy;

    /**
     * @var integer
     *
     * @ORM\Column(name="percent", type="integer", nullable=true)
     */
    private $percent;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_cw_id", type="integer", nullable=true)
     */
    private $parentCwId;

    /**
     * @var integer
     *
     * @ORM\Column(name="cw_id", type="integer", nullable=true)
     */
    private $cwId;

    /**
     * @var integer
     *
     * @ORM\Column(name="filer_cik", type="integer", nullable=true)
     */
    private $filerCik;

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    private $year;

    /**
     * @var integer
     *
     * @ORM\Column(name="quarter", type="integer", nullable=true)
     */
    private $quarter;

    /**
     * @var integer
     *
     * @ORM\Column(name="relationship_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $relationshipId;



    /**
     * Set companyName
     *
     * @param string $companyName
     * @return Relationships
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    
        return $this;
    }

    /**
     * Get companyName
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Relationships
     */
    public function setLocation($location)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set filingId
     *
     * @param integer $filingId
     * @return Relationships
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
     * Set countryCode
     *
     * @param string $countryCode
     * @return Relationships
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    
        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string 
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set subdivCode
     *
     * @param string $subdivCode
     * @return Relationships
     */
    public function setSubdivCode($subdivCode)
    {
        $this->subdivCode = $subdivCode;
    
        return $this;
    }

    /**
     * Get subdivCode
     *
     * @return string 
     */
    public function getSubdivCode()
    {
        return $this->subdivCode;
    }

    /**
     * Set cleanCompany
     *
     * @param string $cleanCompany
     * @return Relationships
     */
    public function setCleanCompany($cleanCompany)
    {
        $this->cleanCompany = $cleanCompany;
    
        return $this;
    }

    /**
     * Get cleanCompany
     *
     * @return string 
     */
    public function getCleanCompany()
    {
        return $this->cleanCompany;
    }

    /**
     * Set cik
     *
     * @param integer $cik
     * @return Relationships
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
     * Set ignoreRecord
     *
     * @param boolean $ignoreRecord
     * @return Relationships
     */
    public function setIgnoreRecord($ignoreRecord)
    {
        $this->ignoreRecord = $ignoreRecord;
    
        return $this;
    }

    /**
     * Get ignoreRecord
     *
     * @return boolean 
     */
    public function getIgnoreRecord()
    {
        return $this->ignoreRecord;
    }

    /**
     * Set parseMethod
     *
     * @param string $parseMethod
     * @return Relationships
     */
    public function setParseMethod($parseMethod)
    {
        $this->parseMethod = $parseMethod;
    
        return $this;
    }

    /**
     * Get parseMethod
     *
     * @return string 
     */
    public function getParseMethod()
    {
        return $this->parseMethod;
    }

    /**
     * Set hierarchy
     *
     * @param integer $hierarchy
     * @return Relationships
     */
    public function setHierarchy($hierarchy)
    {
        $this->hierarchy = $hierarchy;
    
        return $this;
    }

    /**
     * Get hierarchy
     *
     * @return integer 
     */
    public function getHierarchy()
    {
        return $this->hierarchy;
    }

    /**
     * Set percent
     *
     * @param integer $percent
     * @return Relationships
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
    
        return $this;
    }

    /**
     * Get percent
     *
     * @return integer 
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Set parentCwId
     *
     * @param integer $parentCwId
     * @return Relationships
     */
    public function setParentCwId($parentCwId)
    {
        $this->parentCwId = $parentCwId;
    
        return $this;
    }

    /**
     * Get parentCwId
     *
     * @return integer 
     */
    public function getParentCwId()
    {
        return $this->parentCwId;
    }

    /**
     * Set cwId
     *
     * @param integer $cwId
     * @return Relationships
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
     * Set filerCik
     *
     * @param integer $filerCik
     * @return Relationships
     */
    public function setFilerCik($filerCik)
    {
        $this->filerCik = $filerCik;
    
        return $this;
    }

    /**
     * Get filerCik
     *
     * @return integer 
     */
    public function getFilerCik()
    {
        return $this->filerCik;
    }

    /**
     * Set year
     *
     * @param integer $year
     * @return Relationships
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
     * Set quarter
     *
     * @param integer $quarter
     * @return Relationships
     */
    public function setQuarter($quarter)
    {
        $this->quarter = $quarter;
    
        return $this;
    }

    /**
     * Get quarter
     *
     * @return integer 
     */
    public function getQuarter()
    {
        return $this->quarter;
    }

    /**
     * Get relationshipId
     *
     * @return integer 
     */
    public function getRelationshipId()
    {
        return $this->relationshipId;
    }
}