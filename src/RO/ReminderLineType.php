<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing ReminderLineType
 *
 * ABIE
 *  Reminder Line. Details
 *  A class to define a line in a Reminder document.
 *  Reminder Line
 * XSD Type: ReminderLineType
 */
class ReminderLineType
{
    /**
     * BBIE
     *  Reminder Line. Identifier
     *  An identifier for this reminder line.
     *  1
     *  Reminder Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Reminder Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Reminder Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Reminder Line. UUID. Identifier
     *  A universally unique identifier for this reminder line.
     *  0..1
     *  Reminder Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Reminder Line. Balance Brought Forward_ Indicator. Indicator
     *  An indication that this reminder line contains a balance brought forward (true) or does not (false).
     *  0..1
     *  Reminder Line
     *  Balance Brought Forward
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $balanceBroughtForwardIndicator
     */
    private $balanceBroughtForwardIndicator = null;

    /**
     * BBIE
     *  Reminder Line. Debit_ Line Amount. Amount
     *  The amount debited on this reminder line.
     *  0..1
     *  Reminder Line
     *  Debit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\DebitLineAmount $debitLineAmount
     */
    private $debitLineAmount = null;

    /**
     * BBIE
     *  Reminder Line. Credit_ Line Amount. Amount
     *  The amount credited on this reminder line.
     *  0..1
     *  Reminder Line
     *  Credit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\CreditLineAmount $creditLineAmount
     */
    private $creditLineAmount = null;

    /**
     * BBIE
     *  Reminder Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this reminder line, expressed as a code.
     *  0..1
     *  Reminder Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Reminder Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this reminder line, expressed as text.
     *  0..1
     *  Reminder Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * BBIE
     *  Reminder Line. Penalty_ Surcharge Percent. Percent
     *  The penalty for late payment, expressed as a percentage.
     *  0..1
     *  Reminder Line
     *  Penalty
     *  Surcharge Percent
     *  Percent
     *  Percent. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\PenaltySurchargePercent $penaltySurchargePercent
     */
    private $penaltySurchargePercent = null;

    /**
     * BBIE
     *  Reminder Line. Amount
     *  The amount on this reminder line.
     *  0..1
     *  Reminder Line
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\Amount $amount
     */
    private $amount = null;

    /**
     * BBIE
     *  Reminder Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Reminder Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\PaymentPurposeCode $paymentPurposeCode
     */
    private $paymentPurposeCode = null;

    /**
     * ASBIE
     *  Reminder Line. Reminder_ Period. Period
     *  A period to which this reminder line applies.
     *  0..n
     *  Reminder Line
     *  Reminder
     *  Period
     *  Period
     *  Period
     *
     * @var \CleverIt\UBL\Invoice\RO\ReminderPeriod[] $reminderPeriod
     */
    private $reminderPeriod = [
        
    ];

    /**
     * ASBIE
     *  Reminder Line. Billing Reference
     *  A reference to a billing document associated with this reminder line.
     *  0..n
     *  Reminder Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @var \CleverIt\UBL\Invoice\RO\BillingReference[] $billingReference
     */
    private $billingReference = [
        
    ];

    /**
     * ASBIE
     *  Reminder Line. Exchange Rate
     *  The rate of exchange between the currency of the Reminder and the currency of the document described in the BillingReference.
     *  0..1
     *  Reminder Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \CleverIt\UBL\Invoice\RO\ExchangeRate $exchangeRate
     */
    private $exchangeRate = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Reminder Line. Identifier
     *  An identifier for this reminder line.
     *  1
     *  Reminder Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Reminder Line. Identifier
     *  An identifier for this reminder line.
     *  1
     *  Reminder Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\ID $iD
     * @return self
     */
    public function setID(\CleverIt\UBL\Invoice\RO\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Reminder Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Reminder Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\Note $note
     */
    public function addToNote(\CleverIt\UBL\Invoice\RO\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Reminder Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Reminder Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Reminder Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Reminder Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Reminder Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Reminder Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Reminder Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Reminder Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Note[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Reminder Line. UUID. Identifier
     *  A universally unique identifier for this reminder line.
     *  0..1
     *  Reminder Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Reminder Line. UUID. Identifier
     *  A universally unique identifier for this reminder line.
     *  0..1
     *  Reminder Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\UUID $uUID
     * @return self
     */
    public function setUUID(?\CleverIt\UBL\Invoice\RO\UUID $uUID = null)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as balanceBroughtForwardIndicator
     *
     * BBIE
     *  Reminder Line. Balance Brought Forward_ Indicator. Indicator
     *  An indication that this reminder line contains a balance brought forward (true) or does not (false).
     *  0..1
     *  Reminder Line
     *  Balance Brought Forward
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getBalanceBroughtForwardIndicator()
    {
        return $this->balanceBroughtForwardIndicator;
    }

    /**
     * Sets a new balanceBroughtForwardIndicator
     *
     * BBIE
     *  Reminder Line. Balance Brought Forward_ Indicator. Indicator
     *  An indication that this reminder line contains a balance brought forward (true) or does not (false).
     *  0..1
     *  Reminder Line
     *  Balance Brought Forward
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $balanceBroughtForwardIndicator
     * @return self
     */
    public function setBalanceBroughtForwardIndicator($balanceBroughtForwardIndicator)
    {
        $this->balanceBroughtForwardIndicator = $balanceBroughtForwardIndicator;
        return $this;
    }

    /**
     * Gets as debitLineAmount
     *
     * BBIE
     *  Reminder Line. Debit_ Line Amount. Amount
     *  The amount debited on this reminder line.
     *  0..1
     *  Reminder Line
     *  Debit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\DebitLineAmount
     */
    public function getDebitLineAmount()
    {
        return $this->debitLineAmount;
    }

    /**
     * Sets a new debitLineAmount
     *
     * BBIE
     *  Reminder Line. Debit_ Line Amount. Amount
     *  The amount debited on this reminder line.
     *  0..1
     *  Reminder Line
     *  Debit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\DebitLineAmount $debitLineAmount
     * @return self
     */
    public function setDebitLineAmount(?\CleverIt\UBL\Invoice\RO\DebitLineAmount $debitLineAmount = null)
    {
        $this->debitLineAmount = $debitLineAmount;
        return $this;
    }

    /**
     * Gets as creditLineAmount
     *
     * BBIE
     *  Reminder Line. Credit_ Line Amount. Amount
     *  The amount credited on this reminder line.
     *  0..1
     *  Reminder Line
     *  Credit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\CreditLineAmount
     */
    public function getCreditLineAmount()
    {
        return $this->creditLineAmount;
    }

    /**
     * Sets a new creditLineAmount
     *
     * BBIE
     *  Reminder Line. Credit_ Line Amount. Amount
     *  The amount credited on this reminder line.
     *  0..1
     *  Reminder Line
     *  Credit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\CreditLineAmount $creditLineAmount
     * @return self
     */
    public function setCreditLineAmount(?\CleverIt\UBL\Invoice\RO\CreditLineAmount $creditLineAmount = null)
    {
        $this->creditLineAmount = $creditLineAmount;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * BBIE
     *  Reminder Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this reminder line, expressed as a code.
     *  0..1
     *  Reminder Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\AccountingCostCode
     */
    public function getAccountingCostCode()
    {
        return $this->accountingCostCode;
    }

    /**
     * Sets a new accountingCostCode
     *
     * BBIE
     *  Reminder Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this reminder line, expressed as a code.
     *  0..1
     *  Reminder Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\AccountingCostCode $accountingCostCode
     * @return self
     */
    public function setAccountingCostCode(?\CleverIt\UBL\Invoice\RO\AccountingCostCode $accountingCostCode = null)
    {
        $this->accountingCostCode = $accountingCostCode;
        return $this;
    }

    /**
     * Gets as accountingCost
     *
     * BBIE
     *  Reminder Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this reminder line, expressed as text.
     *  0..1
     *  Reminder Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\AccountingCost
     */
    public function getAccountingCost()
    {
        return $this->accountingCost;
    }

    /**
     * Sets a new accountingCost
     *
     * BBIE
     *  Reminder Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this reminder line, expressed as text.
     *  0..1
     *  Reminder Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\AccountingCost $accountingCost
     * @return self
     */
    public function setAccountingCost(?\CleverIt\UBL\Invoice\RO\AccountingCost $accountingCost = null)
    {
        $this->accountingCost = $accountingCost;
        return $this;
    }

    /**
     * Gets as penaltySurchargePercent
     *
     * BBIE
     *  Reminder Line. Penalty_ Surcharge Percent. Percent
     *  The penalty for late payment, expressed as a percentage.
     *  0..1
     *  Reminder Line
     *  Penalty
     *  Surcharge Percent
     *  Percent
     *  Percent. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\PenaltySurchargePercent
     */
    public function getPenaltySurchargePercent()
    {
        return $this->penaltySurchargePercent;
    }

    /**
     * Sets a new penaltySurchargePercent
     *
     * BBIE
     *  Reminder Line. Penalty_ Surcharge Percent. Percent
     *  The penalty for late payment, expressed as a percentage.
     *  0..1
     *  Reminder Line
     *  Penalty
     *  Surcharge Percent
     *  Percent
     *  Percent. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\PenaltySurchargePercent $penaltySurchargePercent
     * @return self
     */
    public function setPenaltySurchargePercent(?\CleverIt\UBL\Invoice\RO\PenaltySurchargePercent $penaltySurchargePercent = null)
    {
        $this->penaltySurchargePercent = $penaltySurchargePercent;
        return $this;
    }

    /**
     * Gets as amount
     *
     * BBIE
     *  Reminder Line. Amount
     *  The amount on this reminder line.
     *  0..1
     *  Reminder Line
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * BBIE
     *  Reminder Line. Amount
     *  The amount on this reminder line.
     *  0..1
     *  Reminder Line
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\Amount $amount
     * @return self
     */
    public function setAmount(?\CleverIt\UBL\Invoice\RO\Amount $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as paymentPurposeCode
     *
     * BBIE
     *  Reminder Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Reminder Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\PaymentPurposeCode
     */
    public function getPaymentPurposeCode()
    {
        return $this->paymentPurposeCode;
    }

    /**
     * Sets a new paymentPurposeCode
     *
     * BBIE
     *  Reminder Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Reminder Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\PaymentPurposeCode $paymentPurposeCode
     * @return self
     */
    public function setPaymentPurposeCode(?\CleverIt\UBL\Invoice\RO\PaymentPurposeCode $paymentPurposeCode = null)
    {
        $this->paymentPurposeCode = $paymentPurposeCode;
        return $this;
    }

    /**
     * Adds as reminderPeriod
     *
     * ASBIE
     *  Reminder Line. Reminder_ Period. Period
     *  A period to which this reminder line applies.
     *  0..n
     *  Reminder Line
     *  Reminder
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\ReminderPeriod $reminderPeriod
     */
    public function addToReminderPeriod(\CleverIt\UBL\Invoice\RO\ReminderPeriod $reminderPeriod)
    {
        $this->reminderPeriod[] = $reminderPeriod;
        return $this;
    }

    /**
     * isset reminderPeriod
     *
     * ASBIE
     *  Reminder Line. Reminder_ Period. Period
     *  A period to which this reminder line applies.
     *  0..n
     *  Reminder Line
     *  Reminder
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReminderPeriod($index)
    {
        return isset($this->reminderPeriod[$index]);
    }

    /**
     * unset reminderPeriod
     *
     * ASBIE
     *  Reminder Line. Reminder_ Period. Period
     *  A period to which this reminder line applies.
     *  0..n
     *  Reminder Line
     *  Reminder
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReminderPeriod($index)
    {
        unset($this->reminderPeriod[$index]);
    }

    /**
     * Gets as reminderPeriod
     *
     * ASBIE
     *  Reminder Line. Reminder_ Period. Period
     *  A period to which this reminder line applies.
     *  0..n
     *  Reminder Line
     *  Reminder
     *  Period
     *  Period
     *  Period
     *
     * @return \CleverIt\UBL\Invoice\RO\ReminderPeriod[]
     */
    public function getReminderPeriod()
    {
        return $this->reminderPeriod;
    }

    /**
     * Sets a new reminderPeriod
     *
     * ASBIE
     *  Reminder Line. Reminder_ Period. Period
     *  A period to which this reminder line applies.
     *  0..n
     *  Reminder Line
     *  Reminder
     *  Period
     *  Period
     *  Period
     *
     * @param \CleverIt\UBL\Invoice\RO\ReminderPeriod[] $reminderPeriod
     * @return self
     */
    public function setReminderPeriod(array $reminderPeriod = null)
    {
        $this->reminderPeriod = $reminderPeriod;
        return $this;
    }

    /**
     * Adds as billingReference
     *
     * ASBIE
     *  Reminder Line. Billing Reference
     *  A reference to a billing document associated with this reminder line.
     *  0..n
     *  Reminder Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\BillingReference $billingReference
     */
    public function addToBillingReference(\CleverIt\UBL\Invoice\RO\BillingReference $billingReference)
    {
        $this->billingReference[] = $billingReference;
        return $this;
    }

    /**
     * isset billingReference
     *
     * ASBIE
     *  Reminder Line. Billing Reference
     *  A reference to a billing document associated with this reminder line.
     *  0..n
     *  Reminder Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBillingReference($index)
    {
        return isset($this->billingReference[$index]);
    }

    /**
     * unset billingReference
     *
     * ASBIE
     *  Reminder Line. Billing Reference
     *  A reference to a billing document associated with this reminder line.
     *  0..n
     *  Reminder Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBillingReference($index)
    {
        unset($this->billingReference[$index]);
    }

    /**
     * Gets as billingReference
     *
     * ASBIE
     *  Reminder Line. Billing Reference
     *  A reference to a billing document associated with this reminder line.
     *  0..n
     *  Reminder Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @return \CleverIt\UBL\Invoice\RO\BillingReference[]
     */
    public function getBillingReference()
    {
        return $this->billingReference;
    }

    /**
     * Sets a new billingReference
     *
     * ASBIE
     *  Reminder Line. Billing Reference
     *  A reference to a billing document associated with this reminder line.
     *  0..n
     *  Reminder Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param \CleverIt\UBL\Invoice\RO\BillingReference[] $billingReference
     * @return self
     */
    public function setBillingReference(array $billingReference = null)
    {
        $this->billingReference = $billingReference;
        return $this;
    }

    /**
     * Gets as exchangeRate
     *
     * ASBIE
     *  Reminder Line. Exchange Rate
     *  The rate of exchange between the currency of the Reminder and the currency of the document described in the BillingReference.
     *  0..1
     *  Reminder Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \CleverIt\UBL\Invoice\RO\ExchangeRate
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * ASBIE
     *  Reminder Line. Exchange Rate
     *  The rate of exchange between the currency of the Reminder and the currency of the document described in the BillingReference.
     *  0..1
     *  Reminder Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \CleverIt\UBL\Invoice\RO\ExchangeRate $exchangeRate
     * @return self
     */
    public function setExchangeRate(?\CleverIt\UBL\Invoice\RO\ExchangeRate $exchangeRate = null)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }
}

