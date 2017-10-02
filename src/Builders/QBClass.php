<?php

namespace ShowHouseSoftware\Quickbooks\Builders;

class QBClass extends Builder
{
    /**
     * @param $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->data['Id'] = $id;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->data['Name'] = $name;

        return $this;
    }
}
