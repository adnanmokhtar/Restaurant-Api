<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Http\Resources\RestaurantResource;
use App\Repositories\RestaurantRepository;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{

    private $restaurantRepository;

    public function __construct(RestaurantRepository $restaurantRepository)
    {
        $this->restaurantRepository = $restaurantRepository;
    }

    public function index(Request $request)
    {
        $result = $this->restaurantRepository->findAll()->filter($request)->all();
        return RestaurantResource::collection(collect($result));
    }

}
