<?php

namespace ShowHouseSoftware\Quickbooks\Builders\Traits;

trait HasVendor
{
    /**
     * Set Vendor's ID.
     *
     * @param int $id Vendor's Quickbooks ID
     *
     * @return $this
     */
    public function setVendor($id)
    {
        $this->data['VendorRef']['value'] = $id;

        return $this;
    }
}
