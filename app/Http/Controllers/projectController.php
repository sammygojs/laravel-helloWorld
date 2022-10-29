<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{
    public function getData(Request $request){
        $data = "my data variable";
        return view('index',['key'=>$data]);
    }
}
