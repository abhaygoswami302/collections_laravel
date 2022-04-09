<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EachAndEachSpreadController extends Controller
{
    public function eachAndEachSPread()
    {
        // each is a utility method not mapping method
        // you can use map to map over items
        // if it fails at any value itll stop iterating

        $each = collect([1, 2, 3, 4])
                        ->each(function($value){
                           dump("current value is : ". $value);
                        });

        // after 2 , itll fail and exit the loop
        $each2 = collect([1, 2, 3, 4])
                        ->each(function($value){
                            if($value > 2){
                                return false;
                            }
                            dump("current value is : ". $value);
                        });

        // here $value[0], $value[1] can be confusing , so we can use eachSpread
        $each3 = collect([
            ['apples', '90', 'California'],
            ['banana', '30', 'Florida'],
            ['coconut', '20', 'Taxes'],
        ])->each(function($value){
            dump("We have {$value[1]} quantity of {$value[0]} in {$value[2]} city");
        });

        /**************************** EACH SPREAD METHOD ****************************/ 
        echo "<br><br><br>";
        $each4 = collect([
            ['apples', '90', 'California'],
            ['banana', '30', 'Florida'],
            ['coconut', '20', 'Taxes'],
        ])->eachSpread(function($product, $quantity, $city){
            dump("We have {$quantity} quantity of {$product} in {$city} city");
        });
                        
    }
}
