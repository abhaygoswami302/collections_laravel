<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionsController extends Controller
{
    /*************** AVERAGE ****************/
    public function avg()
    {
        $data = ['10', '20', '30'];
        $average = collect($data)->average();

        $data2 = [
            ['price' => 10000],
            ['price' => 20000],
            ['price' => 30000]
        ];

        $average2 = collect($data2)->average('price');

        $data3 = [
            ['price' => 10000, 'tax' => 500],
            ['price' => 20000, 'tax' => 700],
            ['price' => 30000, 'tax' => 900]
        ];

        $average3 = collect($data3)->average(function($value){
            return $value['price'] + $value['tax'];
        });

        $data4 = [
            ['price' => 10000, 'tax' => 500, 'active' => true],
            ['price' => 20000, 'tax' => 700, 'active' => false],
            ['price' => 30000, 'tax' => 900, 'active' => false]
        ];

        $average4 = collect($data4)->average(function($value){
            if(!$value['active']){
                return null;
            }
            return $value['price'] + $value['tax'];
        });

        dd($average4);    
    }

    /*************** MAX ****************/
    public function max()
    {
        $data = [
            '1000', '2000', '3000'
        ];

        $max = collect($data)->max();

        $data2 = [
            ['price' => 1000], 
            ['price' => 2000],
            ['price' => 3000]
        ];

        $max2 = collect($data2)->max('price');

        $data3 = [
            ['price' => 1000, 'tax' => 500], 
            ['price' => 2000, 'tax' => 600],
            ['price' => 3000, 'tax' => 700]
        ];

        $max3 = collect($data3)->max(function($value){
            return $value['price'] + $value['tax'];
        });

        $data3 = [
            ['price' => 1000, 'tax' => 500, 'active' => true], 
            ['price' => 2000, 'tax' => 600, 'active' => true],
            ['price' => 3000, 'tax' => 700, 'active' => false]
        ];

        $max3 = collect($data3)->max(function($value){
            if(!$value['active']){
                return null;
            }
            return $value['price'] + $value['tax'];
        });

        dd($max3);
    }

    /*************** MEDIAN ****************/
    public function median()
    {
        $data = [
            10, 20, 30
        ];

        $median = collect($data)->median();

        $data2 = [
            ['price' => 10],
            ['price' => 20],
            ['price' => 30]
        ];

        $median2 = collect($data2)->median('price');

        dd($median2);
    }

    /*************** MIN ****************/
    public function min()
    {
        $data = [10, 20, 30];

        $min = collect($data)->min();

        $data2 = [
            ['price' => 10],
            ['price' => 20],
            ['price' => 30]
        ];

        $min2 = collect($data2)->min('price');

        $data3 = [
            ['price' => 10, 'tax' => 50],
            ['price' => 20, 'tax' => 50],
            ['price' => 30, 'tax' => 50]
        ];

        $min3 = collect($data3)->min(function($value){
            return $value['price'] + $value['tax'];
        });

        $data4 = [
            ['price' => 10, 'tax' => 50, 'active' => false],
            ['price' => 20, 'tax' => 50, 'active' => true],
            ['price' => 30, 'tax' => 50, 'active' => true]
        ];

        $min4 = collect($data4)->min(function($value){
            if(!$value['active']){
                return null;
            }
            return $value['price'] + $value['tax'];
        });

        dd($min4);
    }
}
