<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstAndLastController extends Controller
{
    public function first()
    {
        $first = collect([1, 2, 3, 4])->first(); // return 1
        $first2 = collect([1, 2, 3, 4])->first(function($element){
            return $element > 1;
        });   // returns 2

        $first3 = collect([])->first(null, 1000);
        // here 1000 is default value, so for empty collection it returns 1

        $first4 = collect([1, 2 , 3])->first(null, 2000); 
        // here it will return 1 because collection is not empty

        $first5 = collect([1, 2, 3])->first(function($element){
            return $element > 2;
        }, 2000);  // itll return 3

        dump($first);
        dump($first2);
        dump($first3);
        dump($first4);
        dump($first5);
    }
    
    public function last()
    {
        $last = collect([1, 2 , 3, 4])->last();
        $last2 = collect([1, 2 , 3, 4])->last(function($element){
            return $element < 4;
        });
        $last3 = collect([])->last(null, 1000);
        // here 1000 is default value, so for empty collection it returns 1

        $last4 = collect([1, 2 , 3])->last(null, 2000); 
        // here it will return 3 because collection is not empty

        $last5 = collect([1, 2, 3])->last(function($element){
            return $element < 3;
        }, 2000);  // itll return 2


        dump($last);
        dump($last2);
        dump($last3);
        dump($last4);
        dump($last5);
    }
}
