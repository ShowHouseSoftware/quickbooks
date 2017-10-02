<?php

namespace ShowHouseSoftware\Quickbooks\Services;

use ShowHouseSoftware\Quickbooks\Builders\Address;
use ShowHouseSoftware\Quickbooks\Services\Traits\Attachable;

class Customer extends Service
{
    use Attachable;

    /**
     * Get an instance of Address Builder to build Address.
     *
     * @return \ShowHouseSoftware\Quickbooks\Builders\Address
     */
    public function getAddressBuilder()
    {
        return new Address();
    }
}
