<?php

namespace Bangpound\CorpWatch\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Meta
 *
 * @ORM\Table(name="meta")
 * @ORM\Entity
 */
class Meta
{
    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=200, nullable=false)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="meta", type="string", length=40)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $meta;



    /**
     * Set value
     *
     * @param string $value
     * @return Meta
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Get meta
     *
     * @return string 
     */
    public function getMeta()
    {
        return $this->meta;
    }
}