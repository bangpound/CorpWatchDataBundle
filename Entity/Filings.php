<?php

namespace Bangpound\CorpWatch\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filings
 *
 * @ORM\Table(name="filings")
 * @ORM\Entity
 */
class Filings
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="filing_date", type="date", nullable=false)
     */
    private $filingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=36, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=300, nullable=true)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=300, nullable=false)
     */
    private $filename;

    /**
     * @var integer
     *
     * @ORM\Column(name="cik", type="integer", nullable=false)
     */
    private $cik;

    /**
     * @var boolean
     *
     * @ORM\Column(name="has_sec21", type="boolean", nullable=false)
     */
    private $hasSec21;

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="smallint", nullable=false)
     */
    private $year;

    /**
     * @var boolean
     *
     * @ORM\Column(name="quarter", type="boolean", nullable=true)
     */
    private $quarter;

    /**
     * @var boolean
     *
     * @ORM\Column(name="has_html", type="boolean", nullable=false)
     */
    private $hasHtml;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_tables", type="integer", nullable=false)
     */
    private $numTables;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_rows", type="integer", nullable=false)
     */
    private $numRows;

    /**
     * @var integer
     *
     * @ORM\Column(name="tables_parsed", type="integer", nullable=false)
     */
    private $tablesParsed;

    /**
     * @var integer
     *
     * @ORM\Column(name="rows_parsed", type="integer", nullable=false)
     */
    private $rowsParsed;

    /**
     * @var integer
     *
     * @ORM\Column(name="period_of_report", type="integer", nullable=true)
     */
    private $periodOfReport;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_filed", type="integer", nullable=true)
     */
    private $dateFiled;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_changed", type="integer", nullable=true)
     */
    private $dateChanged;

    /**
     * @var string
     *
     * @ORM\Column(name="sec_21_url", type="string", length=255, nullable=true)
     */
    private $sec21Url;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bad_header", type="boolean", nullable=true)
     */
    private $badHeader;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bad_sec21", type="boolean", nullable=false)
     */
    private $badSec21;

    /**
     * @var integer
     *
     * @ORM\Column(name="filing_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $filingId;



    /**
     * Set filingDate
     *
     * @param \DateTime $filingDate
     * @return Filings
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
     * Set type
     *
     * @param string $type
     * @return Filings
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
     * Set companyName
     *
     * @param string $companyName
     * @return Filings
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    
        return $this;
    }

    /**
     * Get companyName
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return Filings
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    
        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set cik
     *
     * @param integer $cik
     * @return Filings
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
     * Set hasSec21
     *
     * @param boolean $hasSec21
     * @return Filings
     */
    public function setHasSec21($hasSec21)
    {
        $this->hasSec21 = $hasSec21;
    
        return $this;
    }

    /**
     * Get hasSec21
     *
     * @return boolean 
     */
    public function getHasSec21()
    {
        return $this->hasSec21;
    }

    /**
     * Set year
     *
     * @param integer $year
     * @return Filings
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
     * @return Filings
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
     * Set hasHtml
     *
     * @param boolean $hasHtml
     * @return Filings
     */
    public function setHasHtml($hasHtml)
    {
        $this->hasHtml = $hasHtml;
    
        return $this;
    }

    /**
     * Get hasHtml
     *
     * @return boolean 
     */
    public function getHasHtml()
    {
        return $this->hasHtml;
    }

    /**
     * Set numTables
     *
     * @param integer $numTables
     * @return Filings
     */
    public function setNumTables($numTables)
    {
        $this->numTables = $numTables;
    
        return $this;
    }

    /**
     * Get numTables
     *
     * @return integer 
     */
    public function getNumTables()
    {
        return $this->numTables;
    }

    /**
     * Set numRows
     *
     * @param integer $numRows
     * @return Filings
     */
    public function setNumRows($numRows)
    {
        $this->numRows = $numRows;
    
        return $this;
    }

    /**
     * Get numRows
     *
     * @return integer 
     */
    public function getNumRows()
    {
        return $this->numRows;
    }

    /**
     * Set tablesParsed
     *
     * @param integer $tablesParsed
     * @return Filings
     */
    public function setTablesParsed($tablesParsed)
    {
        $this->tablesParsed = $tablesParsed;
    
        return $this;
    }

    /**
     * Get tablesParsed
     *
     * @return integer 
     */
    public function getTablesParsed()
    {
        return $this->tablesParsed;
    }

    /**
     * Set rowsParsed
     *
     * @param integer $rowsParsed
     * @return Filings
     */
    public function setRowsParsed($rowsParsed)
    {
        $this->rowsParsed = $rowsParsed;
    
        return $this;
    }

    /**
     * Get rowsParsed
     *
     * @return integer 
     */
    public function getRowsParsed()
    {
        return $this->rowsParsed;
    }

    /**
     * Set periodOfReport
     *
     * @param integer $periodOfReport
     * @return Filings
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
     * Set dateFiled
     *
     * @param integer $dateFiled
     * @return Filings
     */
    public function setDateFiled($dateFiled)
    {
        $this->dateFiled = $dateFiled;
    
        return $this;
    }

    /**
     * Get dateFiled
     *
     * @return integer 
     */
    public function getDateFiled()
    {
        return $this->dateFiled;
    }

    /**
     * Set dateChanged
     *
     * @param integer $dateChanged
     * @return Filings
     */
    public function setDateChanged($dateChanged)
    {
        $this->dateChanged = $dateChanged;
    
        return $this;
    }

    /**
     * Get dateChanged
     *
     * @return integer 
     */
    public function getDateChanged()
    {
        return $this->dateChanged;
    }

    /**
     * Set sec21Url
     *
     * @param string $sec21Url
     * @return Filings
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
     * Set badHeader
     *
     * @param boolean $badHeader
     * @return Filings
     */
    public function setBadHeader($badHeader)
    {
        $this->badHeader = $badHeader;
    
        return $this;
    }

    /**
     * Get badHeader
     *
     * @return boolean 
     */
    public function getBadHeader()
    {
        return $this->badHeader;
    }

    /**
     * Set badSec21
     *
     * @param boolean $badSec21
     * @return Filings
     */
    public function setBadSec21($badSec21)
    {
        $this->badSec21 = $badSec21;
    
        return $this;
    }

    /**
     * Get badSec21
     *
     * @return boolean 
     */
    public function getBadSec21()
    {
        return $this->badSec21;
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