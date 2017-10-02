<?php

namespace ShowHouseSoftware\Quickbooks\Services\Traits;

trait Itemizable
{
    /**
     * Get Itemized Item Builder.
     *
     * @return \ShowHouseSoftware\Quickbooks\Builders\Items\Invoice|\ShowHouseSoftware\Quickbooks\Builders\Items\Payment
     */
    public function getItemBuilder()
    {
        $class = '\ShowHouseSoftware\Quickbooks\Builders\Items\\'.$this->getEntityName();

        return new $class($this);
    }
}
