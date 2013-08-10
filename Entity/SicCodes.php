<?php

namespace Bangpound\CorpWatch\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SicCodes
 *
 * @ORM\Table(name="sic_codes")
 * @ORM\Entity
 */
class SicCodes
{
    /**
     * @var string
     *
     * @ORM\Column(name="industry_name", type="string", length=100, nullable=true)
     */
    private $industryName;

    /**
     * @var string
     *
     * @ORM\Column(name="sic_sector", type="string", length=4, nullable=true)
     */
    private $sicSector;

    /**
     * @var string
     *
     * @ORM\Column(name="sic_code", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sicCode;



    /**
     * Set industryName
     *
     * @param string $industryName
     * @return SicCodes
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
     * @param string $sicSector
     * @return SicCodes
     */
    public function setSicSector($sicSector)
    {
        $this->sicSector = $sicSector;
    
        return $this;
    }

    /**
     * Get sicSector
     *
     * @return string 
     */
    public function getSicSector()
    {
        return $this->sicSector;
    }

    /**
     * Get sicCode
     *
     * @return string 
     */
    public function getSicCode()
    {
        return $this->sicCode;
    }
}