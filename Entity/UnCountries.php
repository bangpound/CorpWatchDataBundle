<?php

namespace Bangpound\CorpWatch\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnCountries
 *
 * @ORM\Table(name="un_countries")
 * @ORM\Entity
 */
class UnCountries
{
    /**
     * @var string
     *
     * @ORM\Column(name="country_code", type="string", length=2, nullable=false)
     */
    private $countryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="country_name", type="string", length=255, nullable=true)
     */
    private $countryName;

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
     * @return UnCountries
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
     * Set countryName
     *
     * @param string $countryName
     * @return UnCountries
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
    
        return $this;
    }

    /**
     * Get countryName
     *
     * @return string 
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return UnCountries
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
     * @return UnCountries
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