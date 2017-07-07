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
}
