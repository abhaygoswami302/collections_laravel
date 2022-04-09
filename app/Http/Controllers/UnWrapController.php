<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class UnWrapController extends Controller
{
    /************************** UnWrap ***************************/
    /**
     * we need a way to convert these collections, array or string values in one collection 
     * first unwrap is representation of how to do this using array merge
     * to use array_wrap method install laravel helpers package using
     * composer require laravel/helpers    
     */
    public function unwrap()
    {
        $array1 = collect([1, 2, 3, 4]);
        $array2 = [5, 6, 7, 8];
        $array3 = 'string' ;

        // so we need to check parameters here and convert them to arrays if they`re collections
        if($array1 instanceof Collection){
            $array1 = $array1->toArray();
        }

        // similar with array1
        if($array2 instanceof Collection){
            $array2 = $array2->toArray();
        }
         
        dump(array_merge($array1, $array2)); // it wont work for collection

        /********************** ABOVE EXAMPLE USING UNWRAP **********************/
        
        $unWrap = array_merge(
            Collection::unwrap($array1),
            Collection::unwrap($array2),          
        );                        
        // IT will work fine for collections and arrays 
        // but wont work for STRING in collections 
        // in that case, wrap your collection in array_wrap() it will work for ARRAYS, COLLECTIONS AND STRINGS

        $unWrap2 = array_merge(
            array_wrap(Collection::unwrap($array1)),
            array_wrap(Collection::unwrap($array2)) ,
            array_wrap(Collection::unwrap($array3))
        );  

        dump($unWrap2);

        /************************** MAP FUNCTION WITH UNWRAP ***************************/
        $collections = collect([
                    collect([1, 2, 3, 4]),
                    [5, 6, 7, 8],
                    'string' 
                ]);
        $unwrapWithMap = $collections->map(function($item){
            return array_wrap(Collection::unwrap($item));
        });

        dump($unwrapWithMap); // itll return 3 collections wrapped in one COLLECTION

        /************************** FLAT MAP FUNCTION WITH UNWRAP ***************************/
        $collections2 = collect([
            collect([1, 2, 3, 4]),
            [5, 6, 7, 8],
            'string' 
        ]);

        $unwrapWithMap2 = $collections2->flatMap(function($item){
            return array_wrap(Collection::unwrap($item));
        });

        dump($unwrapWithMap2); // itll return one COLLECTION with all the items in ARRAY, COLLECTION AND STRING

         /************************** FLAT MAP FUNCTION WITH UNWRAP ***************************/
         $collections3 = collect([
            collect([1, 2, 3, 4]),
            [5, 6, 7, 8],
            'string' 
        ]);

        $unwrapWithMap3 = $collections3->flatMap(function($item){
            return array_wrap(Collection::unwrap($item));
        })->all();

        dump($unwrapWithMap3); // all method will convert collection to array

    }

    
}
