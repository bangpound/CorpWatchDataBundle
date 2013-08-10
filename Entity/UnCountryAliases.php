<?php

namespace Bangpound\CorpWatch\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnCountryAliases
 *
 * @ORM\Table(name="un_country_aliases")
 * @ORM\Entity
 */
class UnCountryAliases
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
     * @ORM\Column(name="subdiv_code", type="string", length=3, nullable=true)
     */
    private $subdivCode;

    /**
     * @var string
     *
     * @ORM\Column(name="country_name", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $countryName;



    /**
     * Set countryCode
     *
     * @param string $countryCode
     * @return UnCountryAliases
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
     * @return UnCountryAliases
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
     * Get countryName
     *
     * @return string 
     */
    public function getCountryName()
    {
        return $this->countryName;
    }
}