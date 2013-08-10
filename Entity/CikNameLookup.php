<?php

namespace Bangpound\CorpWatch\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CikNameLookup
 *
 * @ORM\Table(name="cik_name_lookup")
 * @ORM\Entity
 */
class CikNameLookup
{
    /**
     * @var string
     *
     * @ORM\Column(name="edgar_name", type="string", length=255, nullable=true)
     */
    private $edgarName;

    /**
     * @var integer
     *
     * @ORM\Column(name="cik", type="integer", nullable=true)
     */
    private $cik;

    /**
     * @var string
     *
     * @ORM\Column(name="match_name", type="string", length=255, nullable=true)
     */
    private $matchName;

    /**
     * @var integer
     *
     * @ORM\Column(name="cw_id", type="integer", nullable=true)
     */
    private $cwId;

    /**
     * @var integer
     *
     * @ORM\Column(name="row_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rowId;



    /**
     * Set edgarName
     *
     * @param string $edgarName
     * @return CikNameLookup
     */
    public function setEdgarName($edgarName)
    {
        $this->edgarName = $edgarName;
    
        return $this;
    }

    /**
     * Get edgarName
     *
     * @return string 
     */
    public function getEdgarName()
    {
        return $this->edgarName;
    }

    /**
     * Set cik
     *
     * @param integer $cik
     * @return CikNameLookup
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
     * Set matchName
     *
     * @param string $matchName
     * @return CikNameLookup
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
     * Set cwId
     *
     * @param integer $cwId
     * @return CikNameLookup
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
     * Get rowId
     *
     * @return integer 
     */
    public function getRowId()
    {
        return $this->rowId;
    }
}