<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing PeriodType
 *
 * ABIE
 *  Period. Details
 *  A class to describe a period of time.
 *  Period
 * XSD Type: PeriodType
 */
class PeriodType
{
    /**
     * BBIE
     *  Period. Start Date. Date
     *  The date on which this period begins.
     *  0..1
     *  Period
     *  Start Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * BBIE
     *  Period. Start Time. Time
     *  The time at which this period begins.
     *  0..1
     *  Period
     *  Start Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * BBIE
     *  Period. End Date. Date
     *  The date on which this period ends.
     *  0..1
     *  Period
     *  End Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * BBIE
     *  Period. End Time. Time
     *  The time at which this period ends.
     *  0..1
     *  Period
     *  End Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * BBIE
     *  Period. Duration. Measure
     *  The duration of this period, expressed as an ISO 8601 code.
     *  0..1
     *  Period
     *  Duration
     *  Measure
     *  Measure. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\DurationMeasure $durationMeasure
     */
    private $durationMeasure = null;

    /**
     * BBIE
     *  Period. Description Code. Code
     *  A description of this period, expressed as a code.
     *  0..n
     *  Period
     *  Description Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\DescriptionCode[] $descriptionCode
     */
    private $descriptionCode = [
        
    ];

    /**
     * BBIE
     *  Period. Description. Text
     *  A description of this period, expressed as text.
     *  0..n
     *  Period
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as startDate
     *
     * BBIE
     *  Period. Start Date. Date
     *  The date on which this period begins.
     *  0..1
     *  Period
     *  Start Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * BBIE
     *  Period. Start Date. Date
     *  The date on which this period begins.
     *  0..1
     *  Period
     *  Start Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * BBIE
     *  Period. Start Time. Time
     *  The time at which this period begins.
     *  0..1
     *  Period
     *  Start Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * BBIE
     *  Period. Start Time. Time
     *  The time at which this period begins.
     *  0..1
     *  Period
     *  Start Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime = null)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * BBIE
     *  Period. End Date. Date
     *  The date on which this period ends.
     *  0..1
     *  Period
     *  End Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * BBIE
     *  Period. End Date. Date
     *  The date on which this period ends.
     *  0..1
     *  Period
     *  End Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $endDate
     * @return self
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * BBIE
     *  Period. End Time. Time
     *  The time at which this period ends.
     *  0..1
     *  Period
     *  End Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * BBIE
     *  Period. End Time. Time
     *  The time at which this period ends.
     *  0..1
     *  Period
     *  End Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime = null)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Gets as durationMeasure
     *
     * BBIE
     *  Period. Duration. Measure
     *  The duration of this period, expressed as an ISO 8601 code.
     *  0..1
     *  Period
     *  Duration
     *  Measure
     *  Measure. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\DurationMeasure
     */
    public function getDurationMeasure()
    {
        return $this->durationMeasure;
    }

    /**
     * Sets a new durationMeasure
     *
     * BBIE
     *  Period. Duration. Measure
     *  The duration of this period, expressed as an ISO 8601 code.
     *  0..1
     *  Period
     *  Duration
     *  Measure
     *  Measure. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\DurationMeasure $durationMeasure
     * @return self
     */
    public function setDurationMeasure(?\CleverIt\UBL\Invoice\RO\DurationMeasure $durationMeasure = null)
    {
        $this->durationMeasure = $durationMeasure;
        return $this;
    }

    /**
     * Adds as descriptionCode
     *
     * BBIE
     *  Period. Description Code. Code
     *  A description of this period, expressed as a code.
     *  0..n
     *  Period
     *  Description Code
     *  Code
     *  Code. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\DescriptionCode $descriptionCode
     */
    public function addToDescriptionCode(\CleverIt\UBL\Invoice\RO\DescriptionCode $descriptionCode)
    {
        $this->descriptionCode[] = $descriptionCode;
        return $this;
    }

    /**
     * isset descriptionCode
     *
     * BBIE
     *  Period. Description Code. Code
     *  A description of this period, expressed as a code.
     *  0..n
     *  Period
     *  Description Code
     *  Code
     *  Code. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescriptionCode($index)
    {
        return isset($this->descriptionCode[$index]);
    }

    /**
     * unset descriptionCode
     *
     * BBIE
     *  Period. Description Code. Code
     *  A description of this period, expressed as a code.
     *  0..n
     *  Period
     *  Description Code
     *  Code
     *  Code. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescriptionCode($index)
    {
        unset($this->descriptionCode[$index]);
    }

    /**
     * Gets as descriptionCode
     *
     * BBIE
     *  Period. Description Code. Code
     *  A description of this period, expressed as a code.
     *  0..n
     *  Period
     *  Description Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\DescriptionCode[]
     */
    public function getDescriptionCode()
    {
        return $this->descriptionCode;
    }

    /**
     * Sets a new descriptionCode
     *
     * BBIE
     *  Period. Description Code. Code
     *  A description of this period, expressed as a code.
     *  0..n
     *  Period
     *  Description Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\DescriptionCode[] $descriptionCode
     * @return self
     */
    public function setDescriptionCode(array $descriptionCode = null)
    {
        $this->descriptionCode = $descriptionCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Period. Description. Text
     *  A description of this period, expressed as text.
     *  0..n
     *  Period
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Description $description
     */
    public function addToDescription(\CleverIt\UBL\Invoice\RO\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Period. Description. Text
     *  A description of this period, expressed as text.
     *  0..n
     *  Period
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Period. Description. Text
     *  A description of this period, expressed as text.
     *  0..n
     *  Period
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Period. Description. Text
     *  A description of this period, expressed as text.
     *  0..n
     *  Period
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Period. Description. Text
     *  A description of this period, expressed as text.
     *  0..n
     *  Period
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Description[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

