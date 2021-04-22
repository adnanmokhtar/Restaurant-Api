<?php

// TypeFilter.php

namespace App\NewFilters;

class NameFilter
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function filter($object)
    {
        return $object->name = $this->value;
    }
}
