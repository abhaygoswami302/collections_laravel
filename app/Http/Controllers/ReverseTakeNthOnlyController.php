<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReverseTakeNthOnlyController extends Controller
{
    public function reverse()
    {
        // reverse only reverse the values, the keys remain the same
        $reverse = collect([1, 2, 3, 4])->reverse();

        // to have keys in normal order 0, 1 ,2, 3etc and only values in reverse , use
        $reverse2 = collect([1, 2, 3, 4])->reverse()->values();

        dump($reverse);
        dump($reverse2);
    }

    public function take()
    {
        $take = collect([1, 2, 3, 4])->take(2); // returns 1 and 2

        $take2 = collect([1, 2, 3,4])->take(6); // returns whole collection

        $take3 = collect([1, 2, 3, 4])->take(-2); 
        // returns 3 and 4, because negative starts at the end

        $take4 = collect([1, 2, 3, 4])->take(1); 
        // returns 1 , its similar to first()
        // but first returns string, take returns collection

        $take4 = collect([1, 2, 3, 4])->take(-1); 
        // returns 1 , its similar to last()
        // but last returns string, take returns collection

        dump($take);
        dump($take2);
        dump($take3);
        dump($take4);
    }

    public function nth()
    {
        // nth will take the number of steps mentioned in parameter
        $nth = collect([1, 2, 3, 4])->nth(1); 
        // does nothing returns collection as it is
        $nth2 = collect([1, 2, 3, 4])->nth(2); 
        // returns 1 and 3 , it goes to one then take 2 steps and lands on 3

        // you can offset as second parameter which tells nth from which offset to start from
        $nth3 = collect([1, 2, 3, 4])->nth(2, 2); 
        // instead of starting from 1 it`ll start from 2 offset and return 3
       
        dump($nth);
        dump($nth2);
        dump($nth3);
    }

    public function only()
    {
        $only = collect([1, 2, 3 , 4])->only([0, 2, 3]);

        $only2 = collect(['product' => 'apples','price' => 50, 'qty' => 30])
                            ->only('product');
        
        $only3 = collect(['product' => 'apples','price' => 50, 'qty' => 30])
                            ->only('product', 'price');
    
        $only4 = collect(['product' => 'apples','price' => 50, 'qty' => 30])
                            ->only(null); // returns entire collection

        $keys = collect(['product', 'price']);
        $only5 = collect(['product' => 'apples', 'price' => 60, 'qty' => 50])
                            ->only($keys);

        dump($only);
        dump($only2);
        dump($only3);
        dump($only4);
        dump($only5);
    }
}



















