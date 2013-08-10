<?php

namespace Bangpound\CorpWatch\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FilingsLookup
 *
 * @ORM\Table(name="filings_lookup")
 * @ORM\Entity
 */
class FilingsLookup
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="company_is_filer", type="boolean", nullable=false)
     */
    private $companyIsFiler;

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
     * @ORM\Column(name="filing_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $filingId;



    /**
     * Set companyIsFiler
     *
     * @param boolean $companyIsFiler
     * @return FilingsLookup
     */
    public function setCompanyIsFiler($companyIsFiler)
    {
        $this->companyIsFiler = $companyIsFiler;
    
        return $this;
    }

    /**
     * Get companyIsFiler
     *
     * @return boolean 
     */
    public function getCompanyIsFiler()
    {
        return $this->companyIsFiler;
    }

    /**
     * Set cwId
     *
     * @param integer $cwId
     * @return FilingsLookup
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
     * Set filingId
     *
     * @param integer $filingId
     * @return FilingsLookup
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
}