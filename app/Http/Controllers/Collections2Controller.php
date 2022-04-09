<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Collections2Controller extends Controller
{
    /************* COLLAPSE *************/
    public function collapse()
    {
        $data = [
            [1, 2, 3],
            [4, 5, 6]
        ];

        $collapse = collect($data)->collapse();

        $data2 = [
            [1, 2, 3],
            [4, 5, 6]
        ];

        $collapse2 = collect($data2)->collapse()->first(); // Or median , average like methods

        $data3 = [
            [0 => ['array1']],
            [1 => ['array2']],
            [3, 4, 5]
        ];

        $collapse3 = collect($data3)->collapse();

        dd($collapse3);
    }

    /************** CHUNK *************/
    public function chunk()
    {
        $data = [1,2,3,4,5,6,7,8,9];

        $chunk = collect($data)->chunk(4);

        dd($chunk);
    }

    /************* COMBINE *************/
    public function combine()
    {
        $keys = collect(['column1', 'column2', 'column3']);

        $combine = $keys->combine(['value1', 'value2', 'column3']);

        $keys2 = collect(['column1', 'column2']);

        $combine2 = $keys2->combine([
            ['value' => 123],
            ['value' => 456]
        ]);

        $keys3 = collect(['column1', 'column2']);

        $combine3 = $keys3->combine([
            [  
                'value' => 123, 
                'value2' => 789 , 
                [
                    'array' => 345
                ]
            ],
            ['value' => 456]
        ]);

        dd($combine3);

    }

    /****************** CONCAT *************/
    public function concat()
    {
        $data = ['value1'];

        $concat = collect($data)->concat(['value2']);

        dd($concat);


        /*****IMPORTANT******/
        // CONCAT DOES NOT WORK WITH KEYS , 
        // IT WONT ASSOCIATE YOUR DATA COLLECTION WITH KEY VALUE PAIR IF YOU HAVE ANY
    }

    /*************** CONTAINS *************/
    public function contains()
    {
        $contains = collect(['value1'])->contains('value');  // false
        $contains2 = collect(['value1'])->contains('value1'); // true
        $contains3 = collect(['key' => 'value1'])->contains('value1'); //true

        //to check to key value pair
        $contains4 = collect([['key' => 'value']])->contains('key', 'value');

        // operations on collection
        $contains5 = collect([1, 2, 3, 4, 5])
                        ->contains(function($value, $key){
                        return $value > 4;
                        });

        // CONTAINS STRICT
        $contains6 = collect([15])->contains('15');   // true
        $contains7 = collect(["0015"])->contains('15');   // true
        $contains8 = collect(["  0015"])->contains('15');   // true
        $contains9 = collect([15])->containsStrict('15');   // false , because both have different type
        $contains10 = collect(['15'])->containsStrict('15');   // true
        
        dd($contains10);
    }
}
