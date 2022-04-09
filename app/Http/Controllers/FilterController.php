<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filter()
    {
        // Filter will remove all the 0s, [], null, false, "" , '' etc
        // Opposite of filter is reject
        $collection = collect([1, 2 ,3 ,4])->filter();
        $collection2 = collect([1, 2 ,3 ,4, 0])->filter();
        $collection3 = collect([1, 2 ,3 ,4, []])->filter();
        $collection4 = collect([1, 2 ,3 ,4, null])->filter();
        $collection5 = collect([1, 2 ,3 ,4, false])->filter();
        $collection6 = collect([1, 2 ,3 ,4, ""])->filter();
        $collection7 = collect([1, 2 ,3 ,4, ''])->filter();

        $collection8 = collect([1, 2, 3, 4])->filter(function($value){
            return ($value % 2 == 0);
        });

        $collection9 = collect([1, 2, 3, 4])->filter(function($value, $key){
            return ($key > 2);
        });

        dump($collection);
        dump($collection2);
        dump($collection3);
        dump($collection4);
        dump($collection5);
        dump($collection6);
        dump($collection7);
        dump($collection8);
        dump($collection9);
    }
}
