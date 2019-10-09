<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function create(Request $request){   
        return view("create");
    }


    public function show(Request $request){
        $name = $request->input('name');
        $s_name = $request->input('s_name');
        return view("show", compact("name", "s_name"));
    }

   
}
