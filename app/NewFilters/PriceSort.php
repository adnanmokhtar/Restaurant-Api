<?php

// TypeFilter.php

namespace App\NewFilters;

class PriceSort
{

    public function sortByDesc($object1, $object2)
    {
        return $object1->price < $object2->price ? 1 : -1;
    }

    public function sortByAsc($object1, $object2)
    {
        return $object1->price > $object2->price ? 1 : -1;
    }
}
