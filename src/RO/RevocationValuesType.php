<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing RevocationValuesType
 *
 *
 * XSD Type: RevocationValuesType
 */
class RevocationValuesType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType[] $cRLValues
     */
    private $cRLValues = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType[] $oCSPValues
     */
    private $oCSPValues = null;

    /**
     * @var \CleverIt\UBL\Invoice\RO\AnyType[] $otherValues
     */
    private $otherValues = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as encapsulatedCRLValue
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType $encapsulatedCRLValue
     */
    public function addToCRLValues(\CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType $encapsulatedCRLValue)
    {
        $this->cRLValues[] = $encapsulatedCRLValue;
        return $this;
    }

    /**
     * isset cRLValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCRLValues($index)
    {
        return isset($this->cRLValues[$index]);
    }

    /**
     * unset cRLValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCRLValues($index)
    {
        unset($this->cRLValues[$index]);
    }

    /**
     * Gets as cRLValues
     *
     * @return \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType[]
     */
    public function getCRLValues()
    {
        return $this->cRLValues;
    }

    /**
     * Sets a new cRLValues
     *
     * @param \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType[] $cRLValues
     * @return self
     */
    public function setCRLValues(array $cRLValues = null)
    {
        $this->cRLValues = $cRLValues;
        return $this;
    }

    /**
     * Adds as encapsulatedOCSPValue
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType $encapsulatedOCSPValue
     */
    public function addToOCSPValues(\CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType $encapsulatedOCSPValue)
    {
        $this->oCSPValues[] = $encapsulatedOCSPValue;
        return $this;
    }

    /**
     * isset oCSPValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOCSPValues($index)
    {
        return isset($this->oCSPValues[$index]);
    }

    /**
     * unset oCSPValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOCSPValues($index)
    {
        unset($this->oCSPValues[$index]);
    }

    /**
     * Gets as oCSPValues
     *
     * @return \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType[]
     */
    public function getOCSPValues()
    {
        return $this->oCSPValues;
    }

    /**
     * Sets a new oCSPValues
     *
     * @param \CleverIt\UBL\Invoice\RO\EncapsulatedPKIDataType[] $oCSPValues
     * @return self
     */
    public function setOCSPValues(array $oCSPValues = null)
    {
        $this->oCSPValues = $oCSPValues;
        return $this;
    }

    /**
     * Adds as otherValue
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\AnyType $otherValue
     */
    public function addToOtherValues(\CleverIt\UBL\Invoice\RO\AnyType $otherValue)
    {
        $this->otherValues[] = $otherValue;
        return $this;
    }

    /**
     * isset otherValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherValues($index)
    {
        return isset($this->otherValues[$index]);
    }

    /**
     * unset otherValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherValues($index)
    {
        unset($this->otherValues[$index]);
    }

    /**
     * Gets as otherValues
     *
     * @return \CleverIt\UBL\Invoice\RO\AnyType[]
     */
    public function getOtherValues()
    {
        return $this->otherValues;
    }

    /**
     * Sets a new otherValues
     *
     * @param \CleverIt\UBL\Invoice\RO\AnyType[] $otherValues
     * @return self
     */
    public function setOtherValues(array $otherValues = null)
    {
        $this->otherValues = $otherValues;
        return $this;
    }
}

