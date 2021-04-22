<?php

namespace Tests\Unit\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Response;
use Tests\TestCase;

class RestaurantControllerTest extends TestCase
{
//    public function testIndexReturnsDataInValidFormat()
//    {
//        $this->json('get', '/api/users', ['city' => 'cairo', 'min_price' => 400, 'max_price' => 600, 'sort' => '-price;+name'])
//            ->assertStatus(Response::HTTP_OK)
//            ->assertJsonStructure([
//                '*' => ['id', 'name', 'city', 'price'],
//            ]);
//    }

    /** @test */
    public function it_gets_all_users()
    {
//        $users = collect([
//            [
//                'id' => 1,
//                'name' => "Annalise",
//                'city' => "cairo",
//                'price' => 125
//            ],
//            [
//                'id' => 2,
//                'name' => "Lucita",
//                'city' => "Paris",
//                'price' => 180
//            ],
//        ]);

//        $resource = UserResource::collection($users);

        $response = $this->json('get', '/api/restaurants', ['city' => 'cairo', 'min_price' => 400, 'max_price' => 600, 'sort' => '-price;+name'])
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure([
                'data' => [
                    '*' => ['id', 'name', 'city', 'price']
                ]
            ]);
//        $this->assertSame(json_decode($resource->response()->getData(true), true), $response->json());

    }
}
