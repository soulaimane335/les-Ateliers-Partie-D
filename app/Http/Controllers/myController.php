<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function index()
    {
        $tab = array('name' => "Sir", 'age' => "43");
        return view('myview', $tab);
    }
}