<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllAndToArrayAndToJsonController extends Controller
{
    public function allAndToArray()
    {
        // they both are same
        // but all always return collection
        // toArray converts each collection toArray
        $all = collect([1, 2, 3, 4])->all();
        $toArray = collect([1, 2, 3, 4])->toArray();

        $collection = collect([
            collect([1, 2, 3, 4]),
            collect([5, 6, 7, 8])
        ]);

        $all2 = $collection->all();
        $toArray2 = $collection->toArray();
        
        dump($all);
        dump($toArray); 
        dump($all2);
        dump($toArray2); 
    }

    public function toJson()
    {
        // toJson is replacement of json_encode
        $json_encode = collect(['product' => 'apples', 'price'=> 10])->toArray();
        dump(json_encode($json_encode));

        $json_encode = collect(['product' => 'apples', 'price' => 10])->toJson();
        dump($json_encode);

        // you can pass arguments to toJson() method
        $json_encode2 = collect(['product' => 'apples', 'price' => 10])->toJson(JSON_PRETTY_PRINT);
        dump($json_encode2);
    }
}
