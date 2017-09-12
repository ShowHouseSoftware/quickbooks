<?php

namespace ReneDeKat\Quickbooks\Services;

use ReneDeKat\Quickbooks\Services\Traits\Attachable;

class SalesReceipt extends Service
{
    use Attachable;

    /**
     * Void an entity.
     *
     * @param string $id        Item information.
     * @param int    $syncToken
     */
    public function void($id, $syncToken = 0)
    {
        return parent::post($this->getResourceName().'?operation=void', [
            'Id'        => $id,
            'SyncToken' => $syncToken,
        ])->{$this->getEntityName()};
    }
}
