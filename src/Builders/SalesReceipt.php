<?php

namespace ReneDeKat\Quickbooks\Builders;

use ReneDeKat\Quickbooks\Builders\Traits\HasCustomer;
use ReneDeKat\Quickbooks\Builders\Traits\Itemizable;

class SalesReceipt extends Builder
{
    use HasCustomer, Itemizable;

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
}
