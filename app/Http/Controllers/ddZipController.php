<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ddZipController extends Controller
{
    public function dd()
    {
        // you can perform dd in chain method
        // its in red but it works
        return collect([1, 2, 3, 4])
                            ->map(function($item){
                                return $item*30;
                            })
                            ->dd()
                            ->mapWithKeys(function($item){
                                return [$item * 10 => $item];
                            })
                            ->reverse();

    }

    public function zip()
    {
        $zip = collect([1, 2, 3, 4])->zip([5, 6, 7, 8]);
        $zip2 = collect([1, 2, 3, 4])->zip([5, 6, 7, 8], ['a', 'b', 'c', 'd']);
        $zip3 = collect([1, 2, 3, 4])->zip([5, 6, 7, 8], ['a', 'b']);
        $zip4 = collect([1, 2, 3, 4])->zip([5, 6, 7, 8], [null, 'a', 'b']);

        dump($zip);
        dump($zip2);
        dump($zip3);
        dump($zip4);
    }
}
