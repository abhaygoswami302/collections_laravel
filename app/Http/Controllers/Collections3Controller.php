<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Collections3Controller extends Controller
{
    /************ COUNT ***********/
    public function count()
    {
        $data = [1, 2, 3, 4];

        $count = collect($data)->count();

        $data2 = [
            1, 
            2 => [ 3, 4],
            3, 
            4,
            'seven' 
        ];

        $count2 = collect($data2)->count(); // itll return 5 , because count only counts first layer

        dd($count2);
    }

    /************ CROSS JOIN ***********/
    public function crossJoin()
    {
        $data = collect(['1', '2']);

        $crossJoin = $data->crossJoin(['a', 'b']);

        $data2 = collect(['1', '2']);

        $crossJoin2 = $data2->crossJoin(['a', 'b'], ['c', 'd']);

        // Real World Example
        // Suppose youre working on cars site
        // and want to know total number of combinations on car with model colours and release year etc.

        $data3 = collect(['Mustang', 'GT', 'F150']);

        $crossJoin3 = $data3->crossJoin(
            ['automatic', 'manual'],
            ['red', 'black', 'yellow', 'green', 'gray'],
            [2018, 2019]
        )->count();

        dd($crossJoin3);

    }
}
