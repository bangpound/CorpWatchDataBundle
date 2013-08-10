<?php

namespace Bangpound\CorpWatch\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Companies
 *
 * @ORM\Table(name="companies")
 * @ORM\Entity
 */
class Companies
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cw_id", type="integer", nullable=true)
     */
    private $cwId;

    /**
     * @var integer
     *
     * @ORM\Column(name="cik", type="integer", nullable=true)
     */
    private $cik;

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=255, nullable=true)
     */
    private $companyName;

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
     * @ORM\Column(name="row_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rowId;



    /**
     * Set cwId
     *
     * @param integer $cwId
     * @return Companies
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
     * Set cik
     *
     * @param integer $cik
     * @return Companies
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
     * Set companyName
     *
     * @param string $companyName
     * @return Companies
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
     * Set sourceType
     *
     * @param string $sourceType
     * @return Companies
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
     * @return Companies
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
     * Get rowId
     *
     * @return integer 
     */
    public function getRowId()
    {
        return $this->rowId;
    }
}