<?php

namespace Bangpound\CorpWatch\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyFilings
 *
 * @ORM\Table(name="company_filings")
 * @ORM\Entity
 */
class CompanyFilings
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cik", type="integer", nullable=false)
     */
    private $cik;

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="smallint", nullable=false)
     */
    private $year;

    /**
     * @var boolean
     *
     * @ORM\Column(name="quarter", type="boolean", nullable=false)
     */
    private $quarter;

    /**
     * @var integer
     *
     * @ORM\Column(name="period_of_report", type="integer", nullable=true)
     */
    private $periodOfReport;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="filing_date", type="date", nullable=false)
     */
    private $filingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="form_10k_url", type="string", length=328, nullable=false)
     */
    private $form10kUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="sec_21_url", type="string", length=255, nullable=true)
     */
    private $sec21Url;

    /**
     * @var integer
     *
     * @ORM\Column(name="filing_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $filingId;



    /**
     * Set cik
     *
     * @param integer $cik
     * @return CompanyFilings
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
     * Set year
     *
     * @param integer $year
     * @return CompanyFilings
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
     * Set quarter
     *
     * @param boolean $quarter
     * @return CompanyFilings
     */
    public function setQuarter($quarter)
    {
        $this->quarter = $quarter;
    
        return $this;
    }

    /**
     * Get quarter
     *
     * @return boolean 
     */
    public function getQuarter()
    {
        return $this->quarter;
    }

    /**
     * Set periodOfReport
     *
     * @param integer $periodOfReport
     * @return CompanyFilings
     */
    public function setPeriodOfReport($periodOfReport)
    {
        $this->periodOfReport = $periodOfReport;
    
        return $this;
    }

    /**
     * Get periodOfReport
     *
     * @return integer 
     */
    public function getPeriodOfReport()
    {
        return $this->periodOfReport;
    }

    /**
     * Set filingDate
     *
     * @param \DateTime $filingDate
     * @return CompanyFilings
     */
    public function setFilingDate($filingDate)
    {
        $this->filingDate = $filingDate;
    
        return $this;
    }

    /**
     * Get filingDate
     *
     * @return \DateTime 
     */
    public function getFilingDate()
    {
        return $this->filingDate;
    }

    /**
     * Set form10kUrl
     *
     * @param string $form10kUrl
     * @return CompanyFilings
     */
    public function setForm10kUrl($form10kUrl)
    {
        $this->form10kUrl = $form10kUrl;
    
        return $this;
    }

    /**
     * Get form10kUrl
     *
     * @return string 
     */
    public function getForm10kUrl()
    {
        return $this->form10kUrl;
    }

    /**
     * Set sec21Url
     *
     * @param string $sec21Url
     * @return CompanyFilings
     */
    public function setSec21Url($sec21Url)
    {
        $this->sec21Url = $sec21Url;
    
        return $this;
    }

    /**
     * Get sec21Url
     *
     * @return string 
     */
    public function getSec21Url()
    {
        return $this->sec21Url;
    }

    /**
     * Get filingId
     *
     * @return integer 
     */
    public function getFilingId()
    {
        return $this->filingId;
    }
}