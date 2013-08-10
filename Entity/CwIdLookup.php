<?php

namespace Bangpound\CorpWatch\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CwIdLookup
 *
 * @ORM\Table(name="cw_id_lookup")
 * @ORM\Entity
 */
class CwIdLookup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cw_id", type="integer", nullable=false)
     */
    private $cwId;

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=255, nullable=false)
     */
    private $companyName;

    /**
     * @var integer
     *
     * @ORM\Column(name="cik", type="integer", nullable=false)
     */
    private $cik;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="country_code", type="string", length=2, nullable=false)
     */
    private $countryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="subdiv_code", type="string", length=3, nullable=false)
     */
    private $subdivCode;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=20, nullable=true)
     */
    private $source;

    /**
     * @var boolean
     *
     * @ORM\Column(name="orphaned", type="boolean", nullable=false)
     */
    private $orphaned;

    /**
     * @var integer
     *
     * @ORM\Column(name="row_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rowId;



    /**
     * Set cwId
     *
     * @param integer $cwId
     * @return CwIdLookup
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
     * @return CwIdLookup
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
     * Set cik
     *
     * @param integer $cik
     * @return CwIdLookup
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
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return CwIdLookup
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    
        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set countryCode
     *
     * @param string $countryCode
     * @return CwIdLookup
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
     * @return CwIdLookup
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
     * Set source
     *
     * @param string $source
     * @return CwIdLookup
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
     * Set orphaned
     *
     * @param boolean $orphaned
     * @return CwIdLookup
     */
    public function setOrphaned($orphaned)
    {
        $this->orphaned = $orphaned;
    
        return $this;
    }

    /**
     * Get orphaned
     *
     * @return boolean 
     */
    public function getOrphaned()
    {
        return $this->orphaned;
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
}