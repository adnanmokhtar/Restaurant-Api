<?php

// RestaurantFilter.php

namespace App\NewFilters;

class RestaurantFilter extends AbstractFilter
{
    protected $filters = [
        'name' => NameFilter::class,
        'city' => CityFilter::class,
        'min_price' => MinPriceFilter::class,
        'max_price' => MaxPriceFilter::class
    ];
}
