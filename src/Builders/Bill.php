<?php

namespace ShowHouseSoftware\Quickbooks\Builders;

use ShowHouseSoftware\Quickbooks\Builders\Traits\HasVendor;
use ShowHouseSoftware\Quickbooks\Builders\Traits\Itemizable;

class Bill extends Builder
{
    use HasVendor, Itemizable;
}
