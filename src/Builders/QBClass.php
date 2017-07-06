<?php

namespace ReneDeKat\Quickbooks\Builders;

class QBClass extends Builder
{
    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->data['Name'] = $name;

        return $this;
    }
}
