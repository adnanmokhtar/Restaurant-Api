<?php

// TypeFilter.php

namespace App\NewFilters;

class MaxPriceFilter
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function filter($object)
    {
        return $object->price < $this->value;
    }
}
