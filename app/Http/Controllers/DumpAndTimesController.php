<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Factory;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Collection;

class DumpAndTimesController extends Controller
{
    public function dump()
    {
        // same as dd() you can chain it to other methods
        // you can use multiple dumps on each chain method

        $collection = collect([1, 2 ,3 ,4])
                            ->dump()
                            ->reverse()
                            ->map(function($value){
                                return $value * 10;
                            })
                            ->dump()
                            ->first();

    }

    public function times()
    {
        $times = Collection::times(3, function($value){
            return 10;
        });

        dump($times);
        // It'll return 3 values as 10 , 10 , 10 in collection
        // Real world example where it can be used

        $times2 = Collection::times(3, function($value){
            //return FakerFactory(User::class)->make();
        })->toArray();

        // factory not working but you get the idea
        dump($times2);

    }
}
