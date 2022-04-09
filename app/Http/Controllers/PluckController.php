<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PluckController extends Controller
{
    public function pluck()
    {
        // pluck is used to fetch one column form a collection
        // pluck does not work with more than one value
        $collection = collect([
            ['product' => 'apples', 'price' => 50],
            ['product' => 'bananas', 'price' => 50],
            ['product' => 'pears', 'price' => 50],
            ['product' => 'coconut', 'price' => 50],
        ]);

        $newCollection = $collection->pluck(['product']);

        dump($newCollection);

        // to fetch more than one value
        $collection2 = collect([
            ['product' => 'apples', 'price' => 50, 'quantity' => 50],
            ['product' => 'bananas', 'price' => 50, 'quantity' => 50],
            ['product' => 'pears', 'price' => 50, 'quantity' => 50],
            ['product' => 'coconut', 'price' => 50, 'quantity' => 50],
        ]);

        $newCollection2 = $collection2->map(function($item){
            return array_only($item, ['product', 'quantity']);
        });

        dump($newCollection2);

        // collect for collection result
        $collection3 = collect([
            ['product' => 'apples', 'price' => 50, 'quantity' => 50],
            ['product' => 'bananas', 'price' => 50, 'quantity' => 50],
            ['product' => 'pears', 'price' => 50, 'quantity' => 50],
            ['product' => 'coconut', 'price' => 50, 'quantity' => 50],
        ]);

        $newCollection3 = $collection3->map(function($item){
            return collect($item)->only(['product', 'price']);
        });

        dump($newCollection3);

        // for array results
        $collection4 = collect([
            ['product' => 'apples', 'price' => 50, 'quantity' => 50],
            ['product' => 'bananas', 'price' => 50, 'quantity' => 50],
            ['product' => 'pears', 'price' => 50, 'quantity' => 50],
            ['product' => 'coconut', 'price' => 50, 'quantity' => 50],
        ]);

        $newCollection4 = $collection4->map(function($item){
            return collect($item)->only(['product', 'price'])->all();
        })->all();

        dump($newCollection4);
    }
}
