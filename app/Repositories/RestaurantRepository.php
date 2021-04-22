<?php

namespace App\Repositories;

use App\NewFilters\RestaurantFilter;
use App\NewFilters\RestaurantSort;
use App\Services\RestaurantService;
use Illuminate\Http\Request;

class RestaurantRepository
{

    //    private RestaurantService $restaurantservice;
    private $restaurantservice;
    private $data;

    public function __construct(RestaurantService $restaurantservice)
    {
        $this->restaurantservice = $restaurantservice;
    }

    public function findAll()
    {
        $this->data = json_decode($this->restaurantservice->getRestaurant()->getBody())->data;
        return $this;
    }

    public function filter(Request $request){
        $this->data = (new RestaurantFilter($request, $this->data))->filter();
        return $this;
    }

    public function sort(Request $request){
        $this->data = (new RestaurantSort($request, $this->data))->sort();
        return $this;
    }

    public function all(){
        return $this->data;
    }
}
