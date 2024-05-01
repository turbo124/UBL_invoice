<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing StatusType
 *
 * ABIE
 *  Status. Details
 *  A class to describe the condition or position of an object.
 *  Status
 * XSD Type: StatusType
 */
class StatusType
{
    /**
     * BBIE
     *  Status. Condition Code. Code
     *  Specifies the status condition of the related object.
     *  0..1
     *  Status
     *  Condition Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ConditionCode $conditionCode
     */
    private $conditionCode = null;

    /**
     * BBIE
     *  Status. Reference Date. Date
     *  The reference date for this status.
     *  0..1
     *  Status
     *  Reference Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $referenceDate
     */
    private $referenceDate = null;

    /**
     * BBIE
     *  Status. Reference Time. Time
     *  The reference time for this status.
     *  0..1
     *  Status
     *  Reference Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $referenceTime
     */
    private $referenceTime = null;

    /**
     * BBIE
     *  Status. Description. Text
     *  Text describing this status.
     *  0..n
     *  Status
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Status. Status Reason Code. Code
     *  The reason for this status condition or position, expressed as a code.
     *  0..1
     *  Status
     *  Status Reason Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\StatusReasonCode $statusReasonCode
     */
    private $statusReasonCode = null;

    /**
     * BBIE
     *  Status. Status_ Reason. Text
     *  The reason for this status condition or position, expressed as text.
     *  0..n
     *  Status
     *  Status
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\StatusReason[] $statusReason
     */
    private $statusReason = [
        
    ];

    /**
     * BBIE
     *  Status. Sequence Identifier. Identifier
     *  A sequence identifier for this status.
     *  0..1
     *  Status
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\SequenceID $sequenceID
     */
    private $sequenceID = null;

    /**
     * BBIE
     *  Status. Text
     *  Provides any textual information related to this status.
     *  0..n
     *  Status
     *  Text
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Text[] $text
     */
    private $text = [
        
    ];

    /**
     * BBIE
     *  Status. Indication_ Indicator. Indicator
     *  Specifies an indicator relevant to a specific status.
     *  0..1
     *  Status
     *  Indication
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $indicationIndicator
     */
    private $indicationIndicator = null;

    /**
     * BBIE
     *  Status. Percent
     *  A percentage meaningful in the context of this status.
     *  0..1
     *  Status
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Percent $percent
     */
    private $percent = null;

    /**
     * BBIE
     *  Status. Reliability Percent. Percent
     *  The reliability of this status, expressed as a percentage.
     *  0..1
     *  Status
     *  Reliability Percent
     *  Percent
     *  Percent. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ReliabilityPercent $reliabilityPercent
     */
    private $reliabilityPercent = null;

    /**
     * ASBIE
     *  Status. Condition
     *  Measurements that quantify the condition of the objects covered by the status.
     *  0..n
     *  Status
     *  Condition
     *  Condition
     *  Condition
     *
     * @var \CleverIt\UBL\Invoice\RO\Condition[] $condition
     */
    private $condition = [
        
    ];

    /**
     * Gets as conditionCode
     *
     * BBIE
     *  Status. Condition Code. Code
     *  Specifies the status condition of the related object.
     *  0..1
     *  Status
     *  Condition Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ConditionCode
     */
    public function getConditionCode()
    {
        return $this->conditionCode;
    }

    /**
     * Sets a new conditionCode
     *
     * BBIE
     *  Status. Condition Code. Code
     *  Specifies the status condition of the related object.
     *  0..1
     *  Status
     *  Condition Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ConditionCode $conditionCode
     * @return self
     */
    public function setConditionCode(?\CleverIt\UBL\Invoice\RO\ConditionCode $conditionCode = null)
    {
        $this->conditionCode = $conditionCode;
        return $this;
    }

    /**
     * Gets as referenceDate
     *
     * BBIE
     *  Status. Reference Date. Date
     *  The reference date for this status.
     *  0..1
     *  Status
     *  Reference Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getReferenceDate()
    {
        return $this->referenceDate;
    }

    /**
     * Sets a new referenceDate
     *
     * BBIE
     *  Status. Reference Date. Date
     *  The reference date for this status.
     *  0..1
     *  Status
     *  Reference Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $referenceDate
     * @return self
     */
    public function setReferenceDate(\DateTime $referenceDate = null)
    {
        $this->referenceDate = $referenceDate;
        return $this;
    }

    /**
     * Gets as referenceTime
     *
     * BBIE
     *  Status. Reference Time. Time
     *  The reference time for this status.
     *  0..1
     *  Status
     *  Reference Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getReferenceTime()
    {
        return $this->referenceTime;
    }

    /**
     * Sets a new referenceTime
     *
     * BBIE
     *  Status. Reference Time. Time
     *  The reference time for this status.
     *  0..1
     *  Status
     *  Reference Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $referenceTime
     * @return self
     */
    public function setReferenceTime(\DateTime $referenceTime = null)
    {
        $this->referenceTime = $referenceTime;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Status. Description. Text
     *  Text describing this status.
     *  0..n
     *  Status
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
     *  Status. Description. Text
     *  Text describing this status.
     *  0..n
     *  Status
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
     *  Status. Description. Text
     *  Text describing this status.
     *  0..n
     *  Status
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
     *  Status. Description. Text
     *  Text describing this status.
     *  0..n
     *  Status
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
     *  Status. Description. Text
     *  Text describing this status.
     *  0..n
     *  Status
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

    /**
     * Gets as statusReasonCode
     *
     * BBIE
     *  Status. Status Reason Code. Code
     *  The reason for this status condition or position, expressed as a code.
     *  0..1
     *  Status
     *  Status Reason Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\StatusReasonCode
     */
    public function getStatusReasonCode()
    {
        return $this->statusReasonCode;
    }

    /**
     * Sets a new statusReasonCode
     *
     * BBIE
     *  Status. Status Reason Code. Code
     *  The reason for this status condition or position, expressed as a code.
     *  0..1
     *  Status
     *  Status Reason Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\StatusReasonCode $statusReasonCode
     * @return self
     */
    public function setStatusReasonCode(?\CleverIt\UBL\Invoice\RO\StatusReasonCode $statusReasonCode = null)
    {
        $this->statusReasonCode = $statusReasonCode;
        return $this;
    }

    /**
     * Adds as statusReason
     *
     * BBIE
     *  Status. Status_ Reason. Text
     *  The reason for this status condition or position, expressed as text.
     *  0..n
     *  Status
     *  Status
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\StatusReason $statusReason
     */
    public function addToStatusReason(\CleverIt\UBL\Invoice\RO\StatusReason $statusReason)
    {
        $this->statusReason[] = $statusReason;
        return $this;
    }

    /**
     * isset statusReason
     *
     * BBIE
     *  Status. Status_ Reason. Text
     *  The reason for this status condition or position, expressed as text.
     *  0..n
     *  Status
     *  Status
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatusReason($index)
    {
        return isset($this->statusReason[$index]);
    }

    /**
     * unset statusReason
     *
     * BBIE
     *  Status. Status_ Reason. Text
     *  The reason for this status condition or position, expressed as text.
     *  0..n
     *  Status
     *  Status
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatusReason($index)
    {
        unset($this->statusReason[$index]);
    }

    /**
     * Gets as statusReason
     *
     * BBIE
     *  Status. Status_ Reason. Text
     *  The reason for this status condition or position, expressed as text.
     *  0..n
     *  Status
     *  Status
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\StatusReason[]
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * Sets a new statusReason
     *
     * BBIE
     *  Status. Status_ Reason. Text
     *  The reason for this status condition or position, expressed as text.
     *  0..n
     *  Status
     *  Status
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\StatusReason[] $statusReason
     * @return self
     */
    public function setStatusReason(array $statusReason = null)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Gets as sequenceID
     *
     * BBIE
     *  Status. Sequence Identifier. Identifier
     *  A sequence identifier for this status.
     *  0..1
     *  Status
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\SequenceID
     */
    public function getSequenceID()
    {
        return $this->sequenceID;
    }

    /**
     * Sets a new sequenceID
     *
     * BBIE
     *  Status. Sequence Identifier. Identifier
     *  A sequence identifier for this status.
     *  0..1
     *  Status
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\SequenceID $sequenceID
     * @return self
     */
    public function setSequenceID(?\CleverIt\UBL\Invoice\RO\SequenceID $sequenceID = null)
    {
        $this->sequenceID = $sequenceID;
        return $this;
    }

    /**
     * Adds as text
     *
     * BBIE
     *  Status. Text
     *  Provides any textual information related to this status.
     *  0..n
     *  Status
     *  Text
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Text $text
     */
    public function addToText(\CleverIt\UBL\Invoice\RO\Text $text)
    {
        $this->text[] = $text;
        return $this;
    }

    /**
     * isset text
     *
     * BBIE
     *  Status. Text
     *  Provides any textual information related to this status.
     *  0..n
     *  Status
     *  Text
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetText($index)
    {
        return isset($this->text[$index]);
    }

    /**
     * unset text
     *
     * BBIE
     *  Status. Text
     *  Provides any textual information related to this status.
     *  0..n
     *  Status
     *  Text
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetText($index)
    {
        unset($this->text[$index]);
    }

    /**
     * Gets as text
     *
     * BBIE
     *  Status. Text
     *  Provides any textual information related to this status.
     *  0..n
     *  Status
     *  Text
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Text[]
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * BBIE
     *  Status. Text
     *  Provides any textual information related to this status.
     *  0..n
     *  Status
     *  Text
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Text[] $text
     * @return self
     */
    public function setText(array $text = null)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as indicationIndicator
     *
     * BBIE
     *  Status. Indication_ Indicator. Indicator
     *  Specifies an indicator relevant to a specific status.
     *  0..1
     *  Status
     *  Indication
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getIndicationIndicator()
    {
        return $this->indicationIndicator;
    }

    /**
     * Sets a new indicationIndicator
     *
     * BBIE
     *  Status. Indication_ Indicator. Indicator
     *  Specifies an indicator relevant to a specific status.
     *  0..1
     *  Status
     *  Indication
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $indicationIndicator
     * @return self
     */
    public function setIndicationIndicator($indicationIndicator)
    {
        $this->indicationIndicator = $indicationIndicator;
        return $this;
    }

    /**
     * Gets as percent
     *
     * BBIE
     *  Status. Percent
     *  A percentage meaningful in the context of this status.
     *  0..1
     *  Status
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Percent
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * BBIE
     *  Status. Percent
     *  A percentage meaningful in the context of this status.
     *  0..1
     *  Status
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Percent $percent
     * @return self
     */
    public function setPercent(?\CleverIt\UBL\Invoice\RO\Percent $percent = null)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * Gets as reliabilityPercent
     *
     * BBIE
     *  Status. Reliability Percent. Percent
     *  The reliability of this status, expressed as a percentage.
     *  0..1
     *  Status
     *  Reliability Percent
     *  Percent
     *  Percent. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ReliabilityPercent
     */
    public function getReliabilityPercent()
    {
        return $this->reliabilityPercent;
    }

    /**
     * Sets a new reliabilityPercent
     *
     * BBIE
     *  Status. Reliability Percent. Percent
     *  The reliability of this status, expressed as a percentage.
     *  0..1
     *  Status
     *  Reliability Percent
     *  Percent
     *  Percent. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ReliabilityPercent $reliabilityPercent
     * @return self
     */
    public function setReliabilityPercent(?\CleverIt\UBL\Invoice\RO\ReliabilityPercent $reliabilityPercent = null)
    {
        $this->reliabilityPercent = $reliabilityPercent;
        return $this;
    }

    /**
     * Adds as condition
     *
     * ASBIE
     *  Status. Condition
     *  Measurements that quantify the condition of the objects covered by the status.
     *  0..n
     *  Status
     *  Condition
     *  Condition
     *  Condition
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Condition $condition
     */
    public function addToCondition(\CleverIt\UBL\Invoice\RO\Condition $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition
     *
     * ASBIE
     *  Status. Condition
     *  Measurements that quantify the condition of the objects covered by the status.
     *  0..n
     *  Status
     *  Condition
     *  Condition
     *  Condition
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCondition($index)
    {
        return isset($this->condition[$index]);
    }

    /**
     * unset condition
     *
     * ASBIE
     *  Status. Condition
     *  Measurements that quantify the condition of the objects covered by the status.
     *  0..n
     *  Status
     *  Condition
     *  Condition
     *  Condition
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCondition($index)
    {
        unset($this->condition[$index]);
    }

    /**
     * Gets as condition
     *
     * ASBIE
     *  Status. Condition
     *  Measurements that quantify the condition of the objects covered by the status.
     *  0..n
     *  Status
     *  Condition
     *  Condition
     *  Condition
     *
     * @return \CleverIt\UBL\Invoice\RO\Condition[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * ASBIE
     *  Status. Condition
     *  Measurements that quantify the condition of the objects covered by the status.
     *  0..n
     *  Status
     *  Condition
     *  Condition
     *  Condition
     *
     * @param \CleverIt\UBL\Invoice\RO\Condition[] $condition
     * @return self
     */
    public function setCondition(array $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }
}

