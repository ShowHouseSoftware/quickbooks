<?php

namespace ShowHouseSoftware\Quickbooks\Builders;

use ShowHouseSoftware\Quickbooks\Builders\Traits\HasVendor;
use ShowHouseSoftware\Quickbooks\Builders\Traits\Itemizable;

class Bill extends Builder
{
    use HasVendor, Itemizable;

    /**
     * @param string $invoice_number
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->data['DocNumber'] = $invoice_number;

        return $this;
    }
}
