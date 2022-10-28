<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloWorldController extends Controller
{
    //
    function hello_world(){
        return view('hello_world');
    }
}
