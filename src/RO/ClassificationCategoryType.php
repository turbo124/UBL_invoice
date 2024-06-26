<?php

namespace CleverIt\UBL\Invoice\RO;

/**
 * Class representing ClassificationCategoryType
 *
 * ABIE
 *  Classification Category. Details
 *  A class to define a category within a classification scheme.
 *  Classification Category
 * XSD Type: ClassificationCategoryType
 */
class ClassificationCategoryType
{
    /**
     * BBIE
     *  Classification Category. Name
     *  The name of this category within the classification scheme.
     *  0..1
     *  Classification Category
     *  Name
     *  Name
     *  Name. Type
     *  Code List Name
     *  UNSPSC Class , UNSPSC Segment , UNSPSC Family
     *
     * @var \CleverIt\UBL\Invoice\RO\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Classification Category. Code Value. Text
     *  The value of a code used to identify this category within the classification scheme.
     *  0..1
     *  Classification Category
     *  Code Value
     *  Text
     *  Text. Type
     *  Code Value
     *  3420001, 3273666, HSJJD-213
     *
     * @var \CleverIt\UBL\Invoice\RO\CodeValue $codeValue
     */
    private $codeValue = null;

    /**
     * BBIE
     *  Classification Category. Description. Text
     *  Text describing this category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  Electrical Goods , Wooden Toys
     *
     * @var \CleverIt\UBL\Invoice\RO\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  A recursive description of a subcategory of this category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @var \CleverIt\UBL\Invoice\RO\CategorizesClassificationCategory[] $categorizesClassificationCategory
     */
    private $categorizesClassificationCategory = [
        
    ];

    /**
     * Gets as name
     *
     * BBIE
     *  Classification Category. Name
     *  The name of this category within the classification scheme.
     *  0..1
     *  Classification Category
     *  Name
     *  Name
     *  Name. Type
     *  Code List Name
     *  UNSPSC Class , UNSPSC Segment , UNSPSC Family
     *
     * @return \CleverIt\UBL\Invoice\RO\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Classification Category. Name
     *  The name of this category within the classification scheme.
     *  0..1
     *  Classification Category
     *  Name
     *  Name
     *  Name. Type
     *  Code List Name
     *  UNSPSC Class , UNSPSC Segment , UNSPSC Family
     *
     * @param \CleverIt\UBL\Invoice\RO\Name $name
     * @return self
     */
    public function setName(?\CleverIt\UBL\Invoice\RO\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as codeValue
     *
     * BBIE
     *  Classification Category. Code Value. Text
     *  The value of a code used to identify this category within the classification scheme.
     *  0..1
     *  Classification Category
     *  Code Value
     *  Text
     *  Text. Type
     *  Code Value
     *  3420001, 3273666, HSJJD-213
     *
     * @return \CleverIt\UBL\Invoice\RO\CodeValue
     */
    public function getCodeValue()
    {
        return $this->codeValue;
    }

    /**
     * Sets a new codeValue
     *
     * BBIE
     *  Classification Category. Code Value. Text
     *  The value of a code used to identify this category within the classification scheme.
     *  0..1
     *  Classification Category
     *  Code Value
     *  Text
     *  Text. Type
     *  Code Value
     *  3420001, 3273666, HSJJD-213
     *
     * @param \CleverIt\UBL\Invoice\RO\CodeValue $codeValue
     * @return self
     */
    public function setCodeValue(?\CleverIt\UBL\Invoice\RO\CodeValue $codeValue = null)
    {
        $this->codeValue = $codeValue;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Classification Category. Description. Text
     *  Text describing this category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  Electrical Goods , Wooden Toys
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
     *  Classification Category. Description. Text
     *  Text describing this category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  Electrical Goods , Wooden Toys
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
     *  Classification Category. Description. Text
     *  Text describing this category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  Electrical Goods , Wooden Toys
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
     *  Classification Category. Description. Text
     *  Text describing this category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  Electrical Goods , Wooden Toys
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
     *  Classification Category. Description. Text
     *  Text describing this category.
     *  0..n
     *  Classification Category
     *  Description
     *  Text
     *  Text. Type
     *  Code Name
     *  Electrical Goods , Wooden Toys
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
     * Adds as categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  A recursive description of a subcategory of this category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @return self
     * @param \CleverIt\UBL\Invoice\RO\CategorizesClassificationCategory $categorizesClassificationCategory
     */
    public function addToCategorizesClassificationCategory(\CleverIt\UBL\Invoice\RO\CategorizesClassificationCategory $categorizesClassificationCategory)
    {
        $this->categorizesClassificationCategory[] = $categorizesClassificationCategory;
        return $this;
    }

    /**
     * isset categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  A recursive description of a subcategory of this category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategorizesClassificationCategory($index)
    {
        return isset($this->categorizesClassificationCategory[$index]);
    }

    /**
     * unset categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  A recursive description of a subcategory of this category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategorizesClassificationCategory($index)
    {
        unset($this->categorizesClassificationCategory[$index]);
    }

    /**
     * Gets as categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  A recursive description of a subcategory of this category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @return \CleverIt\UBL\Invoice\RO\CategorizesClassificationCategory[]
     */
    public function getCategorizesClassificationCategory()
    {
        return $this->categorizesClassificationCategory;
    }

    /**
     * Sets a new categorizesClassificationCategory
     *
     * ASBIE
     *  Classification Category. Categorizes_ Classification Category. Classification Category
     *  A recursive description of a subcategory of this category.
     *  0..n
     *  Classification Category
     *  Categorizes
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @param \CleverIt\UBL\Invoice\RO\CategorizesClassificationCategory[] $categorizesClassificationCategory
     * @return self
     */
    public function setCategorizesClassificationCategory(array $categorizesClassificationCategory = null)
    {
        $this->categorizesClassificationCategory = $categorizesClassificationCategory;
        return $this;
    }
}

