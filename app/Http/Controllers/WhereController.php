<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class WhereController extends Controller
{
    public function whereAndWhereStrict()
    {
        // you cant perform operations like >, <, <=, <=, != with whereStrict 
        // because whereStrict is an alias for ===
        // both of these return a new collection , it wont change original collection
        $collection = collect([
            ['product' => 'apple' , 'price' => 50],
            ['product' => 'apple' , 'price' => 50],
            ['product' => 'banana' , 'price' => 70],
            ['product' => 'banana' , 'price' => 80],
        ]);

        $where = $collection->where('price', '50');

        $collection = collect([
            ['product' => 'apple' , 'price' => 50],
            ['product' => 'apple' , 'price' => 50],
            ['product' => 'banana' , 'price' => 70],
            ['product' => 'banana' , 'price' => 80],
        ]);

        $whereStrict = $collection->whereStrict('price', 50); // it wont work coz here 50 is a string

        $collection2 = collect([
            ['product' => 'apple' , 'price' => 50],
            ['product' => 'apple' , 'price' => 60],
            ['product' => 'banana' , 'price' => 50],
            ['product' => 'banana' , 'price' => 80],
        ]);

        $where2 = $collection2->where('price', '  50.00'); // it will still WORK with where

        $collection3 = collect([
            ['product' => 'apple' , 'price' => 50],
            ['product' => 'apple' , 'price' => 60],
            ['product' => 'banana' , 'price' => 50],
            ['product' => 'banana' , 'price' => 80],
        ]);

        $where3 = $collection3->where('price', '>' , 50); // you can perform OPERATIONS with where

        dd($where3);
    }

    /**************************** whereBetween And WhereNotBetween ***************************/
    public function whereBetweenAndWhereNotBetween()
    {
        $collection = collect([
            ['product' =>'apples', 'price' => 50],
            ['product' =>'pears', 'price' => 60],
            ['product' =>'banana', 'price' => 70],
            ['product' =>'coconut', 'price' => 80],
        ]);

        $whereBetween = $collection->whereBetween('price', [50, 60]);  // retuns 50 and 60

        $collection = collect([
            ['product' =>'apples', 'price' => 50],
            ['product' =>'pears', 'price' => 60],
            ['product' =>'banana', 'price' => 70],
            ['product' =>'coconut', 'price' => 80],
        ]);

        $whereNotBetween = $collection->whereNotBetween('price', [50, 60]);  // retuns 70 and 80

        dd($whereNotBetween);
    }

    /********************************* WhereIn And WhereInStrict ********************************/
    public function WhereInAndWhereInStrict()
    {
        $collection = collect([
            ['product' => 'apples', 'price' => 50],
            ['product' => 'pears', 'price' => 60],
            ['product' => 'bananas', 'price' => 70],
            ['product' => 'coconuts', 'price' => 80],
        ]);

        $whereIn = $collection->whereIn('price', ['50', 70]);

        $collection = collect([
            ['product' => 'apples', 'price' => 50],
            ['product' => 'pears', 'price' => 60],
            ['product' => 'bananas', 'price' => 70],
            ['product' => 'coconuts', 'price' => 80],
        ]);

        $whereInStrict = $collection->whereInStrict('price', ['50', 70]);  // itll only return 70

        dd($whereInStrict);
    }

    /********************************** WhereNotIn And WhereNotInStrict *********************************/
    public function WhereNotInAndWhereNotInStrict()
    {
        $collection = collect([
            ['product' => 'apples', 'price' => 50],
            ['product' => 'banana', 'price' => 60],
            ['product' => 'pears', 'price' => 70],
            ['product' => 'coconut', 'price' => 80],
        ]);

        $whereNotIn = $collection->whereNotIn('price', [60, 80]); // returns 50 and 70

        $collection = collect([
            ['product' => 'apples', 'price' => 50],
            ['product' => 'banana', 'price' => 60],
            ['product' => 'pears', 'price' => 70],
            ['product' => 'coconut', 'price' => 80],
        ]);

        $whereNotInStrict = $collection->whereNotInStrict('price', ['60', 80]); // returns 50, 60 and 70

        dd($whereNotInStrict);
    }

    /********************************* WhereInstanceOf *********************************/
    public function WhereInstanceOf()
    {
        $collection = collect([
            new Collection(),
            new User(),
        ])->whereInstanceOf(User::class);
    
        dd($collection);
    }

    /**************************** First Where ****************************/
    public function firstWhere()
    {
        $collection = collect([
            ['product' => 'apples', 'price' => 50],
            ['product' => 'bananas', 'price' => 50],
            ['product' => 'pears', 'price' => 50],
            ['product' => 'coconut', 'price' => 50],
        ]);

        $newCollection = $collection->where('price', '50')->first();

        dump($newCollection);

        // firstWhere is combination of where() and first()
        $newCollection2 = $collection->firstWhere('price', '50'); 

        $collection3 = collect([
            ['product' => 'apples', 'price' => null],
            ['product' => 'bananas', 'price' => null],
            ['product' => 'pears', 'price' => 50],
            ['product' => 'coconut', 'price' => 50],
        ]);

        // here 2 values are null so i want pears value, but we cant use firstWhere() here
        $newCollection3 = $collection3->firstWhere('price', '50'); 

        dump($newCollection3);
    }
}
