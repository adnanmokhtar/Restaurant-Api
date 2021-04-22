<?php

// TypeFilter.php

namespace App\NewFilters;

class CityFilter
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function filter($object)
    {
        return $object->city = $this->value;
    }
}
