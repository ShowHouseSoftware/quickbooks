<?php

namespace ShowHouseSoftware\Quickbooks\Builders;

use ShowHouseSoftware\Quickbooks\Builders\Traits\HasCustomer;
use ShowHouseSoftware\Quickbooks\Builders\Traits\Itemizable;

class SalesReceipt extends Builder
{
    use HasCustomer, Itemizable;

    /**
     * @param array $qboBankAccount
     *
     * @return $this
     */
    public function setDepositToAccountRef($qboBankAccount)
    {
        $this->data['DepositToAccountRef']['value'] = $qboBankAccount['value'];
        $this->data['DepositToAccountRef']['name'] = $qboBankAccount['name'];

        return $this;   
    }
    
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
