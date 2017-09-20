<?php

namespace ReneDeKat\Quickbooks\Builders;

use ReneDeKat\Quickbooks\Builders\Traits\Itemizable;

class Bill extends Builder
{
    use Itemizable;

    /**
     * @param string $txnDate
     *
     * @return $this
     */
    public function setTxnDate($txnDate)
    {
        $this->data['TxnDate'] = $txnDate;

        return $this;
    }

    /**
     * Set due date.
     *
     * @param string $dueDate YYYY-MM-DD
     *
     * @return $this
     */
    public function setDueDate($dueDate)
    {
        $this->data['DueDate'] = $dueDate;

        return $this;
    }

    /**
     * Set total amount.
     *
     * @param string $totalAmount
     *
     * @return $this
     */
    public function setTotalAmount($totalAmount)
    {
        $this->data['TotalAmt'] = $totalAmount;

        return $this;
    }

    public function setVendorRef($vendorRef)
    {
        $this->data['VendorRef']['value'] = $vendorRef;

        return $this;
    }
}
