<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TapMapController extends Controller
{
    /*********** TAP ************/
    public function tap()
    {
        return collect([1, 2, 3])
                    ->reverse()
                    ->tap(function($collection){
                        // ANYTHING YOU DO INSIDE THIS METHOD WONT AFFECT THE ORIGINAL COLLECTION
                        $collection->reverse()->each(function($value){
                            dump('In Tap : '. $value);
                        });
                    });
    }

    /************** MAP *************/
    public function map()
    {
        /**********************IMPORTANT********************/
        /**    1. map will not change keys only values */
        /**    2. it returns new collection, and doesnt affect original collection */

        $map = collect([1, 2, 3, 4])->map(function($item){
                // Map will go through each single one of them and perform action methioned here
                    return $item * 10;
                });

        // 
        $map2 = collect([1, 2, 3, 4])->map(function($item, $key){
                // Map will go through each single one of them and perform action methioned here
                    return $item * $key;
                });

        $map3 = collect([
            'value1' => 'first',
            'value2' => 'second'
        ])->map(function($item, $key){
                return $item . $key;
        });

        $map4 = collect([
            'value1' => 'first',
            'value2' => 'second'
        ])->map(function($item, $key){
                return [$item . $key];
        });
        
        dd($map4);
    }

    /*********************** MAPWITHKEYS ***********************/
    public function mapWithKeys()
    {
        $mapWithKeys = collect([
                'value1' => 'first',
                'value2' => 'second'
            ])->mapWithKeys(function($value, $key){
                    if($key == 'value2'){
                        return [];
                    }
                    return [$value => $key];
            });


        $mapWithKeys2 = collect([
                'value1' => 'first',
                'value2' => 'second'
            ])->mapWithKeys(function($value, $key){
                    return [
                        $key => $value,
                        $key.'_upper' => strtoupper($value)
                    ];
            });

        // to prove map gives empty collection
        $mapWithKeys3 = collect([1, 2, 3, 4, 5]);

        $newCollection = $mapWithKeys3->map(function($value, $key){
                    return [];  // itll return empty collection
        });

        dd($newCollection);
    }

    /************************* MAPSPREAD ***************************/
    public function mapSpread()
    {
        // like other map functions, itll return new collection. 
        $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);

        $mapSpread = $collection->chunk(3)
                            ->mapSpread(function($a, $b, $c){
                                return [$a + $b - $c];
                            });
        
        $collection2 = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);

        $mapSpread2 = $collection2->chunk(3)
                            ->mapSpread(function($a, $b, $c){
                                return [$a + $b => $c];
                            });
        dd($mapSpread2);
    }

    /*************************** MAPTODICTIONARY *****************************/
    public function mapToDictionary()
    {
        // MAPTODICTIONARY returns an array
        // MAPTOGROUP returns new collections
        // both wont change original collection, they return new collection
        $collection = collect([
            ['product' => 'apples', 'price' => 59],
            ['product' => 'apples', 'price' => 69],
            ['product' => 'bananas', 'price' => 54],
            ['product' => 'bananas', 'price' => 94],
        ]);

        $mapToDictionary = $collection->mapToDictionary(function($item){
            return [$item['product'] => $item['price']];
        });

        $collection2 = collect([
            ['product' => 'apples', 'price' => 59],
            ['product' => 'apples', 'price' => 69],
            ['product' => 'bananas', 'price' => 54],
            ['product' => 'bananas', 'price' => 94],
        ]);

        $mapToGroups = $collection2->mapToGroups(function($item){
            return [$item['product'] => $item['price']];
        });

        // WITH TO GROUPS YOU CAN ADD MAP TO YOUR NEW COLLECTION COZ IT SENDS COLLECTION
        // WITH MAPTODICTIONARY IT S NOT POSSIBLE 
        $collection3 = collect([
            ['product' => 'apples', 'price' => 59],
            ['product' => 'apples', 'price' => 69],
            ['product' => 'bananas', 'price' => 54],
            ['product' => 'bananas', 'price' => 94],
        ]);

        $mapOnMapToGroups = $collection3->mapToGroups(function($item){
            return [$item['product'] => $item['price']];
        })->map(function($item){
            return $item->max();
        });

        dd($mapOnMapToGroups);
    }
}
