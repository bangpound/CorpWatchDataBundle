<?php

namespace Bangpound\CorpWatch\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SicSectors
 *
 * @ORM\Table(name="sic_sectors")
 * @ORM\Entity
 */
class SicSectors
{
    /**
     * @var string
     *
     * @ORM\Column(name="sector_name", type="string", length=100, nullable=true)
     */
    private $sectorName;

    /**
     * @var integer
     *
     * @ORM\Column(name="sector_group", type="integer", nullable=true)
     */
    private $sectorGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="sector_group_name", type="string", length=100, nullable=true)
     */
    private $sectorGroupName;

    /**
     * @var string
     *
     * @ORM\Column(name="sic_sector", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sicSector;



    /**
     * Set sectorName
     *
     * @param string $sectorName
     * @return SicSectors
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
     * Set sectorGroup
     *
     * @param integer $sectorGroup
     * @return SicSectors
     */
    public function setSectorGroup($sectorGroup)
    {
        $this->sectorGroup = $sectorGroup;
    
        return $this;
    }

    /**
     * Get sectorGroup
     *
     * @return integer 
     */
    public function getSectorGroup()
    {
        return $this->sectorGroup;
    }

    /**
     * Set sectorGroupName
     *
     * @param string $sectorGroupName
     * @return SicSectors
     */
    public function setSectorGroupName($sectorGroupName)
    {
        $this->sectorGroupName = $sectorGroupName;
    
        return $this;
    }

    /**
     * Get sectorGroupName
     *
     * @return string 
     */
    public function getSectorGroupName()
    {
        return $this->sectorGroupName;
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
}