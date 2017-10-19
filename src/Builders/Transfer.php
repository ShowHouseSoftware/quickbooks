<?php

namespace ShowHouseSoftware\Quickbooks\Builders;

class Transfer extends Builder
{
  /**
     * @param float $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->data['Amount'] = $amount;

        return $this;
    }

    /**
     * @param int $accountId
     *
     * @return $this
     */
    public function setFromAccountRef($accountId)
    {
        $this->data['FromAccountRef']['value'] = $accountId;

        return $this;
    }

    /**
     * @param int $accountId
     *
     * @return $this
     */
    public function setToAccountRef($accountId)
    {
        $this->data['ToAccountRef']['value'] = $accountId;

        return $this;
    }
}
