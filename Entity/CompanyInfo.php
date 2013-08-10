<?php

namespace Bangpound\CorpWatch\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyInfo
 *
 * @ORM\Table(name="company_info")
 * @ORM\Entity
 */
class CompanyInfo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="row_id", type="integer", nullable=false)
     */
    private $rowId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="most_recent", type="boolean", nullable=true)
     */
    private $mostRecent;

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
     * @var integer
     *
     * @ORM\Column(name="best_location_id", type="integer", nullable=true)
     */
    private $bestLocationId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sic_code", type="integer", nullable=true)
     */
    private $sicCode;

    /**
     * @var string
     *
     * @ORM\Column(name="industry_name", type="string", length=100, nullable=true)
     */
    private $industryName;

    /**
     * @var integer
     *
     * @ORM\Column(name="sic_sector", type="integer", nullable=true)
     */
    private $sicSector;

    /**
     * @var string
     *
     * @ORM\Column(name="sector_name", type="string", length=100, nullable=true)
     */
    private $sectorName;

    /**
     * @var string
     *
     * @ORM\Column(name="source_type", type="string", length=25, nullable=true)
     */
    private $sourceType;

    /**
     * @var integer
     *
     * @ORM\Column(name="source_id", type="integer", nullable=true)
     */
    private $sourceId;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_parents", type="integer", nullable=true)
     */
    private $numParents;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_children", type="integer", nullable=true)
     */
    private $numChildren;

    /**
     * @var integer
     *
     * @ORM\Column(name="top_parent_id", type="integer", nullable=true)
     */
    private $topParentId;

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=255, nullable=true)
     */
    private $companyName;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_year", type="integer", nullable=true)
     */
    private $maxYear;

    /**
     * @var integer
     *
     * @ORM\Column(name="min_year", type="integer", nullable=true)
     */
    private $minYear;

    /**
     * @var boolean
     *
     * @ORM\Column(name="no_sic", type="boolean", nullable=false)
     */
    private $noSic;

    /**
     * @var integer
     *
     * @ORM\Column(name="cw_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cwId;

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $year;



    /**
     * Set rowId
     *
     * @param integer $rowId
     * @return CompanyInfo
     */
    public function setRowId($rowId)
    {
        $this->rowId = $rowId;
    
        return $this;
    }

    /**
     * Get rowId
     *
     * @return integer 
     */
    public function getRowId()
    {
        return $this->rowId;
    }

    /**
     * Set mostRecent
     *
     * @param boolean $mostRecent
     * @return CompanyInfo
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
     * Set cik
     *
     * @param integer $cik
     * @return CompanyInfo
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
     * @return CompanyInfo
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
     * Set bestLocationId
     *
     * @param integer $bestLocationId
     * @return CompanyInfo
     */
    public function setBestLocationId($bestLocationId)
    {
        $this->bestLocationId = $bestLocationId;
    
        return $this;
    }

    /**
     * Get bestLocationId
     *
     * @return integer 
     */
    public function getBestLocationId()
    {
        return $this->bestLocationId;
    }

    /**
     * Set sicCode
     *
     * @param integer $sicCode
     * @return CompanyInfo
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
     * Set industryName
     *
     * @param string $industryName
     * @return CompanyInfo
     */
    public function setIndustryName($industryName)
    {
        $this->industryName = $industryName;
    
        return $this;
    }

    /**
     * Get industryName
     *
     * @return string 
     */
    public function getIndustryName()
    {
        return $this->industryName;
    }

    /**
     * Set sicSector
     *
     * @param integer $sicSector
     * @return CompanyInfo
     */
    public function setSicSector($sicSector)
    {
        $this->sicSector = $sicSector;
    
        return $this;
    }

    /**
     * Get sicSector
     *
     * @return integer 
     */
    public function getSicSector()
    {
        return $this->sicSector;
    }

    /**
     * Set sectorName
     *
     * @param string $sectorName
     * @return CompanyInfo
     */
    public function setSectorName($sectorName)
    {
        $this->sectorName = $sectorName;
    
        return $this;
    }

    /**
     * Get sectorName
     *
     * @return string 
     */
    public function getSectorName()
    {
        return $this->sectorName;
    }

    /**
     * Set sourceType
     *
     * @param string $sourceType
     * @return CompanyInfo
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;
    
        return $this;
    }

    /**
     * Get sourceType
     *
     * @return string 
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * Set sourceId
     *
     * @param integer $sourceId
     * @return CompanyInfo
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId = $sourceId;
    
        return $this;
    }

    /**
     * Get sourceId
     *
     * @return integer 
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * Set numParents
     *
     * @param integer $numParents
     * @return CompanyInfo
     */
    public function setNumParents($numParents)
    {
        $this->numParents = $numParents;
    
        return $this;
    }

    /**
     * Get numParents
     *
     * @return integer 
     */
    public function getNumParents()
    {
        return $this->numParents;
    }

    /**
     * Set numChildren
     *
     * @param integer $numChildren
     * @return CompanyInfo
     */
    public function setNumChildren($numChildren)
    {
        $this->numChildren = $numChildren;
    
        return $this;
    }

    /**
     * Get numChildren
     *
     * @return integer 
     */
    public function getNumChildren()
    {
        return $this->numChildren;
    }

    /**
     * Set topParentId
     *
     * @param integer $topParentId
     * @return CompanyInfo
     */
    public function setTopParentId($topParentId)
    {
        $this->topParentId = $topParentId;
    
        return $this;
    }

    /**
     * Get topParentId
     *
     * @return integer 
     */
    public function getTopParentId()
    {
        return $this->topParentId;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     * @return CompanyInfo
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
     * Set maxYear
     *
     * @param integer $maxYear
     * @return CompanyInfo
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
     * Set minYear
     *
     * @param integer $minYear
     * @return CompanyInfo
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
     * Set noSic
     *
     * @param boolean $noSic
     * @return CompanyInfo
     */
    public function setNoSic($noSic)
    {
        $this->noSic = $noSic;
    
        return $this;
    }

    /**
     * Get noSic
     *
     * @return boolean 
     */
    public function getNoSic()
    {
        return $this->noSic;
    }

    /**
     * Set cwId
     *
     * @param integer $cwId
     * @return CompanyInfo
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
     * @return CompanyInfo
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
}