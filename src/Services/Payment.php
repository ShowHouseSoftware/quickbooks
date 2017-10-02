<?php

namespace ShowHouseSoftware\Quickbooks\Services;

use ShowHouseSoftware\Quickbooks\Services\Traits\Attachable;
use ShowHouseSoftware\Quickbooks\Services\Traits\Itemizable;

class Payment extends Service
{
    use Itemizable, Attachable;
}
