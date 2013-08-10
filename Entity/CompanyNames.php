<?php

namespace Bangpound\CorpWatch\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyNames
 *
 * @ORM\Table(name="company_names")
 * @ORM\Entity
 */
class CompanyNames
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cw_id", type="integer", nullable=true)
     */
    private $cwId;

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=300, nullable=true)
     */
    private $companyName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=30, nullable=false)
     */
    private $source;

    /**
     * @var integer
     *
     * @ORM\Column(name="source_row_id", type="integer", nullable=false)
     */
    private $sourceRowId;

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
     * @var integer
     *
     * @ORM\Column(name="min_year", type="integer", nullable=true)
     */
    private $minYear;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_year", type="integer", nullable=true)
     */
    private $maxYear;

    /**
     * @var boolean
     *
     * @ORM\Column(name="most_recent", type="boolean", nullable=false)
     */
    private $mostRecent;

    /**
     * @var integer
     *
     * @ORM\Column(name="name_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nameId;



    /**
     * Set cwId
     *
     * @param integer $cwId
     * @return CompanyNames
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
     * Set companyName
     *
     * @param string $companyName
     * @return CompanyNames
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
     * Set date
     *
     * @param \DateTime $date
     * @return CompanyNames
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return CompanyNames
     */
    public function setSource($source)
    {
        $this->source = $source;
    
        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set sourceRowId
     *
     * @param integer $sourceRowId
     * @return CompanyNames
     */
    public function setSourceRowId($sourceRowId)
    {
        $this->sourceRowId = $sourceRowId;
    
        return $this;
    }

    /**
     * Get sourceRowId
     *
     * @return integer 
     */
    public function getSourceRowId()
    {
        return $this->sourceRowId;
    }

    /**
     * Set countryCode
     *
     * @param string $countryCode
     * @return CompanyNames
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
     * @return CompanyNames
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
     * Set minYear
     *
     * @param integer $minYear
     * @return CompanyNames
     */
    public function setMinYear($minYear)
    {
        $this->minYear = $minYear;
    
        return $this;
    }

    /**
     * Get minYear
     *
     * @return integer 
     */
    public function getMinYear()
    {
        return $this->minYear;
    }

    /**
     * Set maxYear
     *
     * @param integer $maxYear
     * @return CompanyNames
     */
    public function setMaxYear($maxYear)
    {
        $this->maxYear = $maxYear;
    
        return $this;
    }

    /**
     * Get maxYear
     *
     * @return integer 
     */
    public function getMaxYear()
    {
        return $this->maxYear;
    }

    /**
     * Set mostRecent
     *
     * @param boolean $mostRecent
     * @return CompanyNames
     */
    public function setMostRecent($mostRecent)
    {
        $this->mostRecent = $mostRecent;
    
        return $this;
    }

    /**
     * Get mostRecent
     *
     * @return boolean 
     */
    public function getMostRecent()
    {
        return $this->mostRecent;
    }

    /**
     * Get nameId
     *
     * @return integer 
     */
    public function getNameId()
    {
        return $this->nameId;
    }
}