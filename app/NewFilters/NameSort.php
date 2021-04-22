<?php

// TypeFilter.php

namespace App\NewFilters;

class NameSort
{

    public function sortByDesc($object1, $object2)
    {
        return $object1->name < $object2->name ? 1 : -1;
    }

    public function sortByAsc($object1, $object2)
    {
        return $object1->name > $object2->name ? 1 : -1;
    }
}
