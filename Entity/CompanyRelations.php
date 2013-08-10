<?php

namespace Bangpound\CorpWatch\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyRelations
 *
 * @ORM\Table(name="company_relations")
 * @ORM\Entity
 */
class CompanyRelations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="source_cw_id", type="integer", nullable=true)
     */
    private $sourceCwId;

    /**
     * @var integer
     *
     * @ORM\Column(name="target_cw_id", type="integer", nullable=true)
     */
    private $targetCwId;

    /**
     * @var string
     *
     * @ORM\Column(name="relation_type", type="string", length=25, nullable=true)
     */
    private $relationType;

    /**
     * @var string
     *
     * @ORM\Column(name="relation_origin", type="string", length=25, nullable=true)
     */
    private $relationOrigin;

    /**
     * @var integer
     *
     * @ORM\Column(name="origin_id", type="integer", nullable=true)
     */
    private $originId;

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    private $year;

    /**
     * @var integer
     *
     * @ORM\Column(name="relation_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $relationId;



    /**
     * Set sourceCwId
     *
     * @param integer $sourceCwId
     * @return CompanyRelations
     */
    public function setSourceCwId($sourceCwId)
    {
        $this->sourceCwId = $sourceCwId;
    
        return $this;
    }

    /**
     * Get sourceCwId
     *
     * @return integer 
     */
    public function getSourceCwId()
    {
        return $this->sourceCwId;
    }

    /**
     * Set targetCwId
     *
     * @param integer $targetCwId
     * @return CompanyRelations
     */
    public function setTargetCwId($targetCwId)
    {
        $this->targetCwId = $targetCwId;
    
        return $this;
    }

    /**
     * Get targetCwId
     *
     * @return integer 
     */
    public function getTargetCwId()
    {
        return $this->targetCwId;
    }

    /**
     * Set relationType
     *
     * @param string $relationType
     * @return CompanyRelations
     */
    public function setRelationType($relationType)
    {
        $this->relationType = $relationType;
    
        return $this;
    }

    /**
     * Get relationType
     *
     * @return string 
     */
    public function getRelationType()
    {
        return $this->relationType;
    }

    /**
     * Set relationOrigin
     *
     * @param string $relationOrigin
     * @return CompanyRelations
     */
    public function setRelationOrigin($relationOrigin)
    {
        $this->relationOrigin = $relationOrigin;
    
        return $this;
    }

    /**
     * Get relationOrigin
     *
     * @return string 
     */
    public function getRelationOrigin()
    {
        return $this->relationOrigin;
    }

    /**
     * Set originId
     *
     * @param integer $originId
     * @return CompanyRelations
     */
    public function setOriginId($originId)
    {
        $this->originId = $originId;
    
        return $this;
    }

    /**
     * Get originId
     *
     * @return integer 
     */
    public function getOriginId()
    {
        return $this->originId;
    }

    /**
     * Set year
     *
     * @param integer $year
     * @return CompanyRelations
     */
    public function setYear($year)
    {
        $this->year = $year;
    
        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Get relationId
     *
     * @return integer 
     */
    public function getRelationId()
    {
        return $this->relationId;
    }
}