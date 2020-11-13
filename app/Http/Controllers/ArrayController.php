<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function sort()
    {
        return view('js.array.sort');
    }

    public function foreach()
    {
        return view('js.array.foreach');
    }

    public function filter()
    {
        return view('js.array.filter');
    }

    public function map()
    {
        return view('js.array.map');
    }

    public function reduce()
    {
        return view('js.array.reduce');
    }
}
