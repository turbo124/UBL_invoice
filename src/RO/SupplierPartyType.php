<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing SupplierPartyType
 *
 * ABIE
 *  Supplier Party. Details
 *  A class to describe a supplier party.
 *  Supplier Party
 * XSD Type: SupplierPartyType
 */
class SupplierPartyType
{
    /**
     * BBIE
     *  Supplier Party. Customer Assigned_ Account Identifier. Identifier
     *  An identifier for this supplier party, assigned by the customer.
     *  0..1
     *  Supplier Party
     *  Customer Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\CustomerAssignedAccountID $customerAssignedAccountID
     */
    private $customerAssignedAccountID = null;

    /**
     * BBIE
     *  Supplier Party. Additional_ Account Identifier. Identifier
     *  An additional identifier for this supplier party.
     *  0..n
     *  Supplier Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\AdditionalAccountID[] $additionalAccountID
     */
    private $additionalAccountID = [
        
    ];

    /**
     * BBIE
     *  Supplier Party. Data Sending Capability. Text
     *  Text describing the supplier's ability to send invoice data via a purchase card provider (e.g., VISA, MasterCard, American Express).
     *  0..1
     *  Supplier Party
     *  Data Sending Capability
     *  Text
     *  Text. Type
     *
     * @var \CleverIt\UBL\Invoice\RO\DataSendingCapability $dataSendingCapability
     */
    private $dataSendingCapability = null;

    /**
     * ASBIE
     *  Supplier Party. Party
     *  The supplier party itself.
     *  0..1
     *  Supplier Party
     *  Party
     *  Party
     *  Party
     *
     * @var \CleverIt\UBL\Invoice\RO\Party $party
     */
    private $party = null;

    /**
     * ASBIE
     *  Supplier Party. Despatch_ Contact. Contact
     *  A contact at this supplier party for despatches (pickups).
     *  0..1
     *  Supplier Party
     *  Despatch
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \CleverIt\UBL\Invoice\RO\DespatchContact $despatchContact
     */
    private $despatchContact = null;

    /**
     * ASBIE
     *  Supplier Party. Accounting_ Contact. Contact
     *  A contact at this supplier party for accounting.
     *  0..1
     *  Supplier Party
     *  Accounting
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \CleverIt\UBL\Invoice\RO\AccountingContact $accountingContact
     */
    private $accountingContact = null;

    /**
     * ASBIE
     *  Supplier Party. Seller_ Contact. Contact
     *  The primary contact for this supplier party.
     *  0..1
     *  Supplier Party
     *  Seller
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \CleverIt\UBL\Invoice\RO\SellerContact $sellerContact
     */
    private $sellerContact = null;

    /**
     * Gets as customerAssignedAccountID
     *
     * BBIE
     *  Supplier Party. Customer Assigned_ Account Identifier. Identifier
     *  An identifier for this supplier party, assigned by the customer.
     *  0..1
     *  Supplier Party
     *  Customer Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\CustomerAssignedAccountID
     */
    public function getCustomerAssignedAccountID()
    {
        return $this->customerAssignedAccountID;
    }

    /**
     * Sets a new customerAssignedAccountID
     *
     * BBIE
     *  Supplier Party. Customer Assigned_ Account Identifier. Identifier
     *  An identifier for this supplier party, assigned by the customer.
     *  0..1
     *  Supplier Party
     *  Customer Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\CustomerAssignedAccountID $customerAssignedAccountID
     * @return self
     */
    public function setCustomerAssignedAccountID(?\CleverIt\UBL\Invoice\RO\CustomerAssignedAccountID $customerAssignedAccountID = null)
    {
        $this->customerAssignedAccountID = $customerAssignedAccountID;
        return $this;
    }

    /**
     * Adds as additionalAccountID
     *
     * BBIE
     *  Supplier Party. Additional_ Account Identifier. Identifier
     *  An additional identifier for this supplier party.
     *  0..n
     *  Supplier Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\AdditionalAccountID $additionalAccountID
     */
    public function addToAdditionalAccountID(\CleverIt\UBL\Invoice\RO\AdditionalAccountID $additionalAccountID)
    {
        $this->additionalAccountID[] = $additionalAccountID;
        return $this;
    }

    /**
     * isset additionalAccountID
     *
     * BBIE
     *  Supplier Party. Additional_ Account Identifier. Identifier
     *  An additional identifier for this supplier party.
     *  0..n
     *  Supplier Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalAccountID($index)
    {
        return isset($this->additionalAccountID[$index]);
    }

    /**
     * unset additionalAccountID
     *
     * BBIE
     *  Supplier Party. Additional_ Account Identifier. Identifier
     *  An additional identifier for this supplier party.
     *  0..n
     *  Supplier Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalAccountID($index)
    {
        unset($this->additionalAccountID[$index]);
    }

    /**
     * Gets as additionalAccountID
     *
     * BBIE
     *  Supplier Party. Additional_ Account Identifier. Identifier
     *  An additional identifier for this supplier party.
     *  0..n
     *  Supplier Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\AdditionalAccountID[]
     */
    public function getAdditionalAccountID()
    {
        return $this->additionalAccountID;
    }

    /**
     * Sets a new additionalAccountID
     *
     * BBIE
     *  Supplier Party. Additional_ Account Identifier. Identifier
     *  An additional identifier for this supplier party.
     *  0..n
     *  Supplier Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\AdditionalAccountID[] $additionalAccountID
     * @return self
     */
    public function setAdditionalAccountID(array $additionalAccountID = null)
    {
        $this->additionalAccountID = $additionalAccountID;
        return $this;
    }

    /**
     * Gets as dataSendingCapability
     *
     * BBIE
     *  Supplier Party. Data Sending Capability. Text
     *  Text describing the supplier's ability to send invoice data via a purchase card provider (e.g., VISA, MasterCard, American Express).
     *  0..1
     *  Supplier Party
     *  Data Sending Capability
     *  Text
     *  Text. Type
     *
     * @return \CleverIt\UBL\Invoice\RO\DataSendingCapability
     */
    public function getDataSendingCapability()
    {
        return $this->dataSendingCapability;
    }

    /**
     * Sets a new dataSendingCapability
     *
     * BBIE
     *  Supplier Party. Data Sending Capability. Text
     *  Text describing the supplier's ability to send invoice data via a purchase card provider (e.g., VISA, MasterCard, American Express).
     *  0..1
     *  Supplier Party
     *  Data Sending Capability
     *  Text
     *  Text. Type
     *
     * @param \CleverIt\UBL\Invoice\RO\DataSendingCapability $dataSendingCapability
     * @return self
     */
    public function setDataSendingCapability(?\CleverIt\UBL\Invoice\RO\DataSendingCapability $dataSendingCapability = null)
    {
        $this->dataSendingCapability = $dataSendingCapability;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Supplier Party. Party
     *  The supplier party itself.
     *  0..1
     *  Supplier Party
     *  Party
     *  Party
     *  Party
     *
     * @return \CleverIt\UBL\Invoice\RO\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * ASBIE
     *  Supplier Party. Party
     *  The supplier party itself.
     *  0..1
     *  Supplier Party
     *  Party
     *  Party
     *  Party
     *
     * @param \CleverIt\UBL\Invoice\RO\Party $party
     * @return self
     */
    public function setParty(?\CleverIt\UBL\Invoice\RO\Party $party = null)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Gets as despatchContact
     *
     * ASBIE
     *  Supplier Party. Despatch_ Contact. Contact
     *  A contact at this supplier party for despatches (pickups).
     *  0..1
     *  Supplier Party
     *  Despatch
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \CleverIt\UBL\Invoice\RO\DespatchContact
     */
    public function getDespatchContact()
    {
        return $this->despatchContact;
    }

    /**
     * Sets a new despatchContact
     *
     * ASBIE
     *  Supplier Party. Despatch_ Contact. Contact
     *  A contact at this supplier party for despatches (pickups).
     *  0..1
     *  Supplier Party
     *  Despatch
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \CleverIt\UBL\Invoice\RO\DespatchContact $despatchContact
     * @return self
     */
    public function setDespatchContact(?\CleverIt\UBL\Invoice\RO\DespatchContact $despatchContact = null)
    {
        $this->despatchContact = $despatchContact;
        return $this;
    }

    /**
     * Gets as accountingContact
     *
     * ASBIE
     *  Supplier Party. Accounting_ Contact. Contact
     *  A contact at this supplier party for accounting.
     *  0..1
     *  Supplier Party
     *  Accounting
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \CleverIt\UBL\Invoice\RO\AccountingContact
     */
    public function getAccountingContact()
    {
        return $this->accountingContact;
    }

    /**
     * Sets a new accountingContact
     *
     * ASBIE
     *  Supplier Party. Accounting_ Contact. Contact
     *  A contact at this supplier party for accounting.
     *  0..1
     *  Supplier Party
     *  Accounting
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \CleverIt\UBL\Invoice\RO\AccountingContact $accountingContact
     * @return self
     */
    public function setAccountingContact(?\CleverIt\UBL\Invoice\RO\AccountingContact $accountingContact = null)
    {
        $this->accountingContact = $accountingContact;
        return $this;
    }

    /**
     * Gets as sellerContact
     *
     * ASBIE
     *  Supplier Party. Seller_ Contact. Contact
     *  The primary contact for this supplier party.
     *  0..1
     *  Supplier Party
     *  Seller
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \CleverIt\UBL\Invoice\RO\SellerContact
     */
    public function getSellerContact()
    {
        return $this->sellerContact;
    }

    /**
     * Sets a new sellerContact
     *
     * ASBIE
     *  Supplier Party. Seller_ Contact. Contact
     *  The primary contact for this supplier party.
     *  0..1
     *  Supplier Party
     *  Seller
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \CleverIt\UBL\Invoice\RO\SellerContact $sellerContact
     * @return self
     */
    public function setSellerContact(?\CleverIt\UBL\Invoice\RO\SellerContact $sellerContact = null)
    {
        $this->sellerContact = $sellerContact;
        return $this;
    }
}

