<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IsEmptyAndIsNotEmptyController extends Controller
{
    public function isEmpty()
    {
        $isEmpty = collect([])->isEmpty(); // returns true
        $isEmpty2 = collect([null])->isEmpty(); // returns false
        $isEmpty3 = collect([0])->isEmpty(); // returns false
        $isEmpty4 = collect([0, null, false])->isEmpty(); // returnsfalse

        $isNotEmpty = collect([])->isNotEmpty(); // returns false
        $isNotEmpty2 = collect([1, 2, 3])->isNotEmpty(); // returns true
        $isNotEmpty3 = collect([null])->isNotEmpty(); // returns true
        $isNotEmpty4 = collect([0])->isNotEmpty(); // returns true
        $isNotEmpty5 = collect([0, null, false])->isNotEmpty(); // returns true

        dump($isEmpty);
        dump($isEmpty2);
        dump($isEmpty3);
        dump($isEmpty4);

        dump($isNotEmpty);
        dump($isNotEmpty2);
        dump($isNotEmpty3);
        dump($isNotEmpty4);
        dump($isNotEmpty5);
    }
}
