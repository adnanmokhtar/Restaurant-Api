<?php

// RestaurantFilter.php

namespace App\NewFilters;

class RestaurantSort extends AbstractSort
{
    protected $sorts = [
        'price' => PriceSort::class,
        'name' => NameSort::class,
    ];
}
