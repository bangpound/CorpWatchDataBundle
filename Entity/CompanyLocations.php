<?php

namespace Bangpound\CorpWatch\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyLocations
 *
 * @ORM\Table(name="company_locations")
 * @ORM\Entity
 */
class CompanyLocations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cw_id", type="integer", nullable=true)
     */
    private $cwId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=15, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="raw_address", type="string", length=500, nullable=true)
     */
    private $rawAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="street_1", type="string", length=300, nullable=true)
     */
    private $street1;

    /**
     * @var string
     *
     * @ORM\Column(name="street_2", type="string", length=300, nullable=true)
     */
    private $street2;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=40, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_code", type="string", length=11, nullable=true)
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=100, nullable=true)
     */
    private $country;

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
     * @ORM\Column(name="location_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $locationId;



    /**
     * Set cwId
     *
     * @param integer $cwId
     * @return CompanyLocations
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
     * Set date
     *
     * @param \DateTime $date
     * @return CompanyLocations
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
     * Set type
     *
     * @param string $type
     * @return CompanyLocations
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set rawAddress
     *
     * @param string $rawAddress
     * @return CompanyLocations
     */
    public function setRawAddress($rawAddress)
    {
        $this->rawAddress = $rawAddress;
    
        return $this;
    }

    /**
     * Get rawAddress
     *
     * @return string 
     */
    public function getRawAddress()
    {
        return $this->rawAddress;
    }

    /**
     * Set street1
     *
     * @param string $street1
     * @return CompanyLocations
     */
    public function setStreet1($street1)
    {
        $this->street1 = $street1;
    
        return $this;
    }

    /**
     * Get street1
     *
     * @return string 
     */
    public function getStreet1()
    {
        return $this->street1;
    }

    /**
     * Set street2
     *
     * @param string $street2
     * @return CompanyLocations
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;
    
        return $this;
    }

    /**
     * Get street2
     *
     * @return string 
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return CompanyLocations
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return CompanyLocations
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     * @return CompanyLocations
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    
        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string 
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return CompanyLocations
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set countryCode
     *
     * @param string $countryCode
     * @return CompanyLocations
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
     * @return CompanyLocations
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
     * @return CompanyLocations
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
     * @return CompanyLocations
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
     * @return CompanyLocations
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
     * Get locationId
     *
     * @return integer 
     */
    public function getLocationId()
    {
        return $this->locationId;
    }
}