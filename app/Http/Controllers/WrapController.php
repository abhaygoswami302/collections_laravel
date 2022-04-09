<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class WrapController extends Controller
{
    /******************* WRAP *********************/
    public function wrap()
    {
        // They all return the same thing, collection with item string on array
        $collection = Collection::wrap('string');
        $collection2 = Collection::wrap(['string']);
        $collection3 = Collection::wrap(collect('string'));
        $collection4 = Collection::wrap(collect(['string']));

        $collection5 = collect([1, 2, 3, 4]);
        $collection6 = collect([5, 6, 7, 8]);

        $newCollection = $collection5->merge($collection6);
        $newCollection2 = $collection5->nth(3)->merge($collection6->nth(3));
        
        // Same thing using wrap
        // newCollection2 Only works on collection not Arrays, newCollection3 will work on collections and  ARRAYS also
        $newCollection3 = Collection::wrap($collection5)->nth(3)
                                        ->merge(
                                            Collection::wrap($collection6)->nth(3)
                                        );
        dump($newCollection3);

        dump($this->wrapFunction(collect([1, 2, 3, 4]), [5, 6, 7, 8])); 
        // you can add many collections here as you want 
        // the ...$collections will take care of it
    }

    public function wrapFunction(...$collections)
    {
        ///////////////////// MAP ///////////////////////
        /*return collect($collections)->map(function($item){
            return Collection::wrap($item)->nth(3);
        });*/ // itll return 2 collection

        //////////////////// FLAT MAP ///////////////////
        return collect($collections)->flatMap(function($item){
            return Collection::wrap($item)->nth(3);
        }); // itll return 1 wrapped collection
    }
}
