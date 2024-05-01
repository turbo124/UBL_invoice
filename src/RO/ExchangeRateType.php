<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing ExchangeRateType
 *
 * ABIE
 *  Exchange Rate. Details
 *  A class to define an exchange rate.
 *  Exchange Rate
 * XSD Type: ExchangeRateType
 */
class ExchangeRateType
{
    /**
     * BBIE
     *  Exchange Rate. Source_ Currency Code. Code
     *  The reference currency for this exchange rate; the currency from which the exchange is being made.
     *  1
     *  Exchange Rate
     *  Source
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\SourceCurrencyCode $sourceCurrencyCode
     */
    private $sourceCurrencyCode = null;

    /**
     * BBIE
     *  Exchange Rate. Source_ Currency Base Rate. Rate
     *  In the case of a source currency with denominations of small value, the unit base.
     *  0..1
     *  Exchange Rate
     *  Source
     *  Currency Base Rate
     *  Rate
     *  Rate. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\SourceCurrencyBaseRate $sourceCurrencyBaseRate
     */
    private $sourceCurrencyBaseRate = null;

    /**
     * BBIE
     *  Exchange Rate. Target_ Currency Code. Code
     *  The target currency for this exchange rate; the currency to which the exchange is being made.
     *  1
     *  Exchange Rate
     *  Target
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\TargetCurrencyCode $targetCurrencyCode
     */
    private $targetCurrencyCode = null;

    /**
     * BBIE
     *  Exchange Rate. Target_ Currency Base Rate. Rate
     *  In the case of a target currency with denominations of small value, the unit base.
     *  0..1
     *  Exchange Rate
     *  Target
     *  Currency Base Rate
     *  Rate
     *  Rate. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\TargetCurrencyBaseRate $targetCurrencyBaseRate
     */
    private $targetCurrencyBaseRate = null;

    /**
     * BBIE
     *  Exchange Rate. Exchange Market Identifier. Identifier
     *  An identifier for the currency exchange market used as the source of this exchange rate.
     *  0..1
     *  Exchange Rate
     *  Exchange Market Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ExchangeMarketID $exchangeMarketID
     */
    private $exchangeMarketID = null;

    /**
     * BBIE
     *  Exchange Rate. Calculation Rate. Rate
     *  The factor applied to the source currency to calculate the target currency.
     *  0..1
     *  Exchange Rate
     *  Calculation Rate
     *  Rate
     *  Rate. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\CalculationRate $calculationRate
     */
    private $calculationRate = null;

    /**
     * BBIE
     *  Exchange Rate. Mathematic Operator Code. Code
     *  A code signifying whether the calculation rate is a multiplier or a divisor.
     *  0..1
     *  Exchange Rate
     *  Mathematic Operator Code
     *  Code
     *  Operator
     *  Operator_ Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\MathematicOperatorCode $mathematicOperatorCode
     */
    private $mathematicOperatorCode = null;

    /**
     * BBIE
     *  Exchange Rate. Date
     *  The date on which the exchange rate was established.
     *  0..1
     *  Exchange Rate
     *  Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * ASBIE
     *  Exchange Rate. Foreign Exchange_ Contract. Contract
     *  A contract for foreign exchange.
     *  0..1
     *  Exchange Rate
     *  Foreign Exchange
     *  Contract
     *  Contract
     *  Contract
     *
     * @var \CleverIt\UBL\Invoice\RO\ForeignExchangeContract $foreignExchangeContract
     */
    private $foreignExchangeContract = null;

    /**
     * Gets as sourceCurrencyCode
     *
     * BBIE
     *  Exchange Rate. Source_ Currency Code. Code
     *  The reference currency for this exchange rate; the currency from which the exchange is being made.
     *  1
     *  Exchange Rate
     *  Source
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\SourceCurrencyCode
     */
    public function getSourceCurrencyCode()
    {
        return $this->sourceCurrencyCode;
    }

    /**
     * Sets a new sourceCurrencyCode
     *
     * BBIE
     *  Exchange Rate. Source_ Currency Code. Code
     *  The reference currency for this exchange rate; the currency from which the exchange is being made.
     *  1
     *  Exchange Rate
     *  Source
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\SourceCurrencyCode $sourceCurrencyCode
     * @return self
     */
    public function setSourceCurrencyCode(\CleverIt\UBL\Invoice\RO\SourceCurrencyCode $sourceCurrencyCode)
    {
        $this->sourceCurrencyCode = $sourceCurrencyCode;
        return $this;
    }

    /**
     * Gets as sourceCurrencyBaseRate
     *
     * BBIE
     *  Exchange Rate. Source_ Currency Base Rate. Rate
     *  In the case of a source currency with denominations of small value, the unit base.
     *  0..1
     *  Exchange Rate
     *  Source
     *  Currency Base Rate
     *  Rate
     *  Rate. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\SourceCurrencyBaseRate
     */
    public function getSourceCurrencyBaseRate()
    {
        return $this->sourceCurrencyBaseRate;
    }

    /**
     * Sets a new sourceCurrencyBaseRate
     *
     * BBIE
     *  Exchange Rate. Source_ Currency Base Rate. Rate
     *  In the case of a source currency with denominations of small value, the unit base.
     *  0..1
     *  Exchange Rate
     *  Source
     *  Currency Base Rate
     *  Rate
     *  Rate. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\SourceCurrencyBaseRate $sourceCurrencyBaseRate
     * @return self
     */
    public function setSourceCurrencyBaseRate(?\CleverIt\UBL\Invoice\RO\SourceCurrencyBaseRate $sourceCurrencyBaseRate = null)
    {
        $this->sourceCurrencyBaseRate = $sourceCurrencyBaseRate;
        return $this;
    }

    /**
     * Gets as targetCurrencyCode
     *
     * BBIE
     *  Exchange Rate. Target_ Currency Code. Code
     *  The target currency for this exchange rate; the currency to which the exchange is being made.
     *  1
     *  Exchange Rate
     *  Target
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\TargetCurrencyCode
     */
    public function getTargetCurrencyCode()
    {
        return $this->targetCurrencyCode;
    }

    /**
     * Sets a new targetCurrencyCode
     *
     * BBIE
     *  Exchange Rate. Target_ Currency Code. Code
     *  The target currency for this exchange rate; the currency to which the exchange is being made.
     *  1
     *  Exchange Rate
     *  Target
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\TargetCurrencyCode $targetCurrencyCode
     * @return self
     */
    public function setTargetCurrencyCode(\CleverIt\UBL\Invoice\RO\TargetCurrencyCode $targetCurrencyCode)
    {
        $this->targetCurrencyCode = $targetCurrencyCode;
        return $this;
    }

    /**
     * Gets as targetCurrencyBaseRate
     *
     * BBIE
     *  Exchange Rate. Target_ Currency Base Rate. Rate
     *  In the case of a target currency with denominations of small value, the unit base.
     *  0..1
     *  Exchange Rate
     *  Target
     *  Currency Base Rate
     *  Rate
     *  Rate. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\TargetCurrencyBaseRate
     */
    public function getTargetCurrencyBaseRate()
    {
        return $this->targetCurrencyBaseRate;
    }

    /**
     * Sets a new targetCurrencyBaseRate
     *
     * BBIE
     *  Exchange Rate. Target_ Currency Base Rate. Rate
     *  In the case of a target currency with denominations of small value, the unit base.
     *  0..1
     *  Exchange Rate
     *  Target
     *  Currency Base Rate
     *  Rate
     *  Rate. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\TargetCurrencyBaseRate $targetCurrencyBaseRate
     * @return self
     */
    public function setTargetCurrencyBaseRate(?\CleverIt\UBL\Invoice\RO\TargetCurrencyBaseRate $targetCurrencyBaseRate = null)
    {
        $this->targetCurrencyBaseRate = $targetCurrencyBaseRate;
        return $this;
    }

    /**
     * Gets as exchangeMarketID
     *
     * BBIE
     *  Exchange Rate. Exchange Market Identifier. Identifier
     *  An identifier for the currency exchange market used as the source of this exchange rate.
     *  0..1
     *  Exchange Rate
     *  Exchange Market Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ExchangeMarketID
     */
    public function getExchangeMarketID()
    {
        return $this->exchangeMarketID;
    }

    /**
     * Sets a new exchangeMarketID
     *
     * BBIE
     *  Exchange Rate. Exchange Market Identifier. Identifier
     *  An identifier for the currency exchange market used as the source of this exchange rate.
     *  0..1
     *  Exchange Rate
     *  Exchange Market Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ExchangeMarketID $exchangeMarketID
     * @return self
     */
    public function setExchangeMarketID(?\CleverIt\UBL\Invoice\RO\ExchangeMarketID $exchangeMarketID = null)
    {
        $this->exchangeMarketID = $exchangeMarketID;
        return $this;
    }

    /**
     * Gets as calculationRate
     *
     * BBIE
     *  Exchange Rate. Calculation Rate. Rate
     *  The factor applied to the source currency to calculate the target currency.
     *  0..1
     *  Exchange Rate
     *  Calculation Rate
     *  Rate
     *  Rate. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\CalculationRate
     */
    public function getCalculationRate()
    {
        return $this->calculationRate;
    }

    /**
     * Sets a new calculationRate
     *
     * BBIE
     *  Exchange Rate. Calculation Rate. Rate
     *  The factor applied to the source currency to calculate the target currency.
     *  0..1
     *  Exchange Rate
     *  Calculation Rate
     *  Rate
     *  Rate. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\CalculationRate $calculationRate
     * @return self
     */
    public function setCalculationRate(?\CleverIt\UBL\Invoice\RO\CalculationRate $calculationRate = null)
    {
        $this->calculationRate = $calculationRate;
        return $this;
    }

    /**
     * Gets as mathematicOperatorCode
     *
     * BBIE
     *  Exchange Rate. Mathematic Operator Code. Code
     *  A code signifying whether the calculation rate is a multiplier or a divisor.
     *  0..1
     *  Exchange Rate
     *  Mathematic Operator Code
     *  Code
     *  Operator
     *  Operator_ Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\MathematicOperatorCode
     */
    public function getMathematicOperatorCode()
    {
        return $this->mathematicOperatorCode;
    }

    /**
     * Sets a new mathematicOperatorCode
     *
     * BBIE
     *  Exchange Rate. Mathematic Operator Code. Code
     *  A code signifying whether the calculation rate is a multiplier or a divisor.
     *  0..1
     *  Exchange Rate
     *  Mathematic Operator Code
     *  Code
     *  Operator
     *  Operator_ Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\MathematicOperatorCode $mathematicOperatorCode
     * @return self
     */
    public function setMathematicOperatorCode(?\CleverIt\UBL\Invoice\RO\MathematicOperatorCode $mathematicOperatorCode = null)
    {
        $this->mathematicOperatorCode = $mathematicOperatorCode;
        return $this;
    }

    /**
     * Gets as date
     *
     * BBIE
     *  Exchange Rate. Date
     *  The date on which the exchange rate was established.
     *  0..1
     *  Exchange Rate
     *  Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * BBIE
     *  Exchange Rate. Date
     *  The date on which the exchange rate was established.
     *  0..1
     *  Exchange Rate
     *  Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as foreignExchangeContract
     *
     * ASBIE
     *  Exchange Rate. Foreign Exchange_ Contract. Contract
     *  A contract for foreign exchange.
     *  0..1
     *  Exchange Rate
     *  Foreign Exchange
     *  Contract
     *  Contract
     *  Contract
     *
     * @return \CleverIt\UBL\Invoice\RO\ForeignExchangeContract
     */
    public function getForeignExchangeContract()
    {
        return $this->foreignExchangeContract;
    }

    /**
     * Sets a new foreignExchangeContract
     *
     * ASBIE
     *  Exchange Rate. Foreign Exchange_ Contract. Contract
     *  A contract for foreign exchange.
     *  0..1
     *  Exchange Rate
     *  Foreign Exchange
     *  Contract
     *  Contract
     *  Contract
     *
     * @param \CleverIt\UBL\Invoice\RO\ForeignExchangeContract $foreignExchangeContract
     * @return self
     */
    public function setForeignExchangeContract(?\CleverIt\UBL\Invoice\RO\ForeignExchangeContract $foreignExchangeContract = null)
    {
        $this->foreignExchangeContract = $foreignExchangeContract;
        return $this;
    }
}

