<?php

namespace Bangpound\CorpWatch\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnCountrySubdivisions
 *
 * @ORM\Table(name="un_country_subdivisions")
 * @ORM\Entity
 */
class UnCountrySubdivisions
{
    /**
     * @var string
     *
     * @ORM\Column(name="country_code", type="string", length=2, nullable=true)
     */
    private $countryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="subdivision_code", type="string", length=3, nullable=true)
     */
    private $subdivisionCode;

    /**
     * @var string
     *
     * @ORM\Column(name="subdivision_name", type="string", length=255, nullable=true)
     */
    private $subdivisionName;

    /**
     * @var string
     *
     * @ORM\Column(name="remarks", type="string", length=255, nullable=true)
     */
    private $remarks;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dupe", type="boolean", nullable=false)
     */
    private $dupe;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", nullable=true)
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", nullable=true)
     */
    private $longitude;

    /**
     * @var integer
     *
     * @ORM\Column(name="row_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rowId;



    /**
     * Set countryCode
     *
     * @param string $countryCode
     * @return UnCountrySubdivisions
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
     * Set subdivisionCode
     *
     * @param string $subdivisionCode
     * @return UnCountrySubdivisions
     */
    public function setSubdivisionCode($subdivisionCode)
    {
        $this->subdivisionCode = $subdivisionCode;
    
        return $this;
    }

    /**
     * Get subdivisionCode
     *
     * @return string 
     */
    public function getSubdivisionCode()
    {
        return $this->subdivisionCode;
    }

    /**
     * Set subdivisionName
     *
     * @param string $subdivisionName
     * @return UnCountrySubdivisions
     */
    public function setSubdivisionName($subdivisionName)
    {
        $this->subdivisionName = $subdivisionName;
    
        return $this;
    }

    /**
     * Get subdivisionName
     *
     * @return string 
     */
    public function getSubdivisionName()
    {
        return $this->subdivisionName;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     * @return UnCountrySubdivisions
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
    
        return $this;
    }

    /**
     * Get remarks
     *
     * @return string 
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Set dupe
     *
     * @param boolean $dupe
     * @return UnCountrySubdivisions
     */
    public function setDupe($dupe)
    {
        $this->dupe = $dupe;
    
        return $this;
    }

    /**
     * Get dupe
     *
     * @return boolean 
     */
    public function getDupe()
    {
        return $this->dupe;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return UnCountrySubdivisions
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    
        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return UnCountrySubdivisions
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    
        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
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