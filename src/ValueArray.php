<?php

namespace Appkr;

class ValueArray implements \ArrayAccess
{
    protected $container = [];

    public function __construct($dto)
    {
        foreach(get_object_vars($dto) as $key => $value) {
            $this->container[$key] = $value;
        }
    }

    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}