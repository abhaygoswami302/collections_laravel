<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SortAndSortByAndGroupByController extends Controller
{
    public function sort()
    {
        $collection1 = collect([1, 3, 5, 7]);
        $collection2 = collect(['a23', 'a12', 'A67', 'a90']);
        $collection3 = collect(['a-23', 'a12', 'b-67', 'b90']);

        $sort1 = $collection1->sort();
        $sort2 = $collection2->sort();

        $sort3 = $collection3->sort(function($a, $b){
            $code = str_replace('-', '', $a);

            return ($code < $b) ? -1 : 1;
        });

        dump($sort1);
        dump($sort2);
        dump($sort3);
    }

    public function sortBy()
    {
        $collection = collect([
            ['product' => 'apples', 'price' => 50],
            ['product' => 'bananas', 'price' => 60],
            ['product' => 'coconut', 'price' => 80],
            ['product' => 'pears', 'price' => 70]
        ]);

        $sortBy = $collection->sortBy('price');
        $sortByDesc = $collection->sortByDesc('price');

        dump($sortBy);
        dump($sortByDesc);

        $collection2 = collect([
            ['product' => 'apples', 'price' => 50, 'code' => 'a-30'],
            ['product' => 'bananas', 'price' => 60, 'code' => 'a23'],
            ['product' => 'coconut', 'price' => 80, 'code' => 'a50'],
            ['product' => 'pears', 'price' => 70, 'code' => 'a35']
        ]);

        $sort2 = $collection2->sortBy('code');
        
        dump($sort2);

        // here a-30 will show up first before a23 to solve this problem use nect example
        $collection3 = collect([
            ['product' => 'apples', 'price' => 50, 'code' => 'a-30'],
            ['product' => 'bananas', 'price' => 60, 'code' => 'a23'],
            ['product' => 'coconut', 'price' => 80, 'code' => 'a50'],
            ['product' => 'pears', 'price' => 70, 'code' => 'a35']
        ]);

        $sort3 = $collection3->sortBy(function($item){
            return str_replace('-', '', $item['code']);
        });

        dump($sort3);
    }

    public function groupBy()
    {
        // groupBy is kind of sorting method
        $collection = collect([
            ['product' => 'apples', 'price' => 10],
            ['product' => 'apples', 'price'=> 10],
            ['product' => 'apples', 'price'=> 10],
            ['product' => 'coconut', 'price'=> 50],
            ['product' => 'coconut', 'price'=> 50],
        ]);

        $groupBy = $collection->groupBy('product');

        dump($groupBy);

        // To use keys with new group collection
        $collection2 = collect([
            'string1' => ['product' => 'apples', 'price' => 10],
            'string2' =>['product' => 'apples', 'price'=> 10],
            'string3' => ['product' => 'apples', 'price'=> 10],
            'string4' => ['product' => 'coconut', 'price'=> 50],
            'string5' => ['product' => 'coconut', 'price'=> 50],
        ]);

        $groupBy2 = $collection2->groupBy('product');  // without string keys
        $groupBy3 = $collection2->groupBy('product', true);  // with string keys

        dump($groupBy2);
        dump($groupBy3);

        $collection3 = collect([
            ['code' => 'A123', 'price' => 10],
            ['code' => 'A 123', 'price'=> 10],
            ['code' => 'A-123', 'price'=> 10],
        ]);

        $groupBy4 = $collection3->groupBy('code'); 
        // itll return 3 new collections to combine it in one , use next method

        dump($groupBy4);

        $collection4 = collect([
            ['code' => 'A123', 'price' => 10],
            ['code' => 'A 123', 'price'=> 10],
            ['code' => 'A-123', 'price'=> 10],
        ]);

        $groupBy5 = $collection4->groupBy(function($item){
            return str_replace(['-', ' '], '', $item);
        }); 
        // now it`ll return one collection

        dump($groupBy5);
    }
}
