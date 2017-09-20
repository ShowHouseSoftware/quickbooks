<?php

namespace ReneDeKat\Quickbooks\Builders\Items;

class Bill extends Item
{
    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->data['Description'] = $description;

        return $this;
    }

    /**
     * Set Amount.
     *
     * @param string $amount Amount.
     *
     * @return \ReneDeKat\Quickbooks\Builders\Items\Bill
     */
    public function setAmount($amount)
    {
        $this->data['Amount'] = $amount;

        return $this;
    }

    /**
     * Set this detail as ItemBasedExpenseLineDetail.
     *
     * @return \ReneDeKat\Quickbooks\Builders\Items\Bill
     */
    public function asItemBasedExpenseLineDetail()
    {
        $this->setDetailType('ItemBasedExpenseLineDetail');

        return $this;
    }

    public function setCustomerRef($id)
    {
        $this->data['ItemBasedExpenseLineDetail']['CustomerRef']['value'] = $id;
    
        return $this;
    }


    public function setAccountRef($id)
    {
        $this->data['ItemBasedExpenseLineDetail']['AccountRef']['value'] = $id;

        return $this;
    }

    public function setItemRef($id)
    {
        $this->data['ItemBasedExpenseLineDetail']['ItemRef']['value'] = $id;

        return $this;
    }

    public function setBillableStatus($billableStatus)
    {
        $this->data['ItemBasedExpenseLineDetail']['BillableStatus'] = $billableStatus;

        return $this;
    }
    
    /**
     * Set this item to be taxable.
     *
     * @param bool  $taxable Set to TRUE to make it taxable or FALSE otherwise. TRUE by default.
     * @param mixed $id      TaxCode ID.
     *
     * @return \ReneDeKat\Quickbooks\Builders\Items\Bill
     */
    public function isTaxable($taxable = true, $id = 'TAX')
    {
        if ($taxable) {
            $this->data[$this->data['DetailType']]['TaxCodeRef']['value'] = $id;
        } elseif (isset($this->data[$this->data['DetailType']]['TaxCodeRef'])) {
            unset($this->data[$this->data['DetailType']]['TaxCodeRef']);
        }

        return $this;
    }
}

