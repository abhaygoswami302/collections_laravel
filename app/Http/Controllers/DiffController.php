<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiffController extends Controller
{
    /**************** DIFF | DIFFASSOC | DIFFKEYS ***************/
    public function diff()
    {
        // diff takes one array and subtract its values from another array
        $collection = collect([1, 2, 3]);
        $diff = $collection->diff([2, 4, 6]); // itll subtract 2 from collection and return 1 and 3

        // To user asociative array form in this example , use diffAssoc
        // IMPORTANT : Here key value pair should match, otherwise it wont subtract
        $collection2 = collect([10 => 'apple', 20 => 'banana']);
        $diffAssoc = $collection2->diffAssoc([30 => 'pears', 202 => 'banana']);

        // If you want subtraction on keys, regardless the value inside key use diffKeys
        $collection3 = collect([10 => 'apple', 20 => 'banana']);
        $diffKeys = $collection3->diffKeys([30 => 'pears', 20 => 'bananas']);

        // Comparison of just the values ------- USE DIFF
        // Comparison of just the keys ------- USE DIFFKeys
        // Comparison of key and values ------- USE DIFFASSOC

        dd($diffKeys);
    }


    /***************  diffUsing | diffAssocUsing | diffKeysUsing ********/
    public function diffUsing()
    {
        $collection = collect([10, 25, 50]);

        $diffUsing = $collection->diffUsing([.1, .25], function($a, $b){
            return ($a == (int)($b * 100)) ? 0 : -1;
        });

        $collection2 = collect([10 => 'apples', 25 => 'banana', 50 => 'coconut']);

        $diffUsing2 = $collection2->diffAssocUsing(['.1' => 'apples', '.25' => 'pears'], function($a, $b){
            return ($a == (int)($b * 100)) ? 0 : -1;
        });

        $collection3 = collect([10 => 'apples', 25 => 'banana', 50 => 'coconut']);

        $diffUsing3 = $collection3->diffKeysUsing(['.1' => 'apples', '.25' => 'pears'], function($a, $b){
            return ($a == (int)($b * 100)) ? 0 : -1;
        });

        // Real world exmple where you to compare strings with special characters
        $collection4 = collect(['123A-G', '456A-G']);

        $diffUsing4 = $collection4->diffUsing(['123AG'], function($a, $b){
                $code = str_replace('-', '', $a);
                return ($code === $b) ? 0 : -1;
        });

        // Above example with Associative data
        $collection5 = collect(['123A-G' => 10, '456A-G' => 25]);

        $diffUsing5 = $collection5->diffAssocUsing(['123AG' => 10], function($a, $b){
                $code = str_replace('-', '', $a);
                return ($code === $b) ? 0 : -1;
        });

         // Above example with keys
         $collection6 = collect(['123A-G' => 10, '456A-G' => 25]);

         $diffUsing6 = $collection6->diffKeysUsing(['123AG' => 35], function($a, $b){
                 $code = str_replace('-', '', $a);
                 return ($code === $b) ? 0 : -1;
         });

        dd($diffUsing6);
    }
}
