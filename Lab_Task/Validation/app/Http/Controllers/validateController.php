<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validateController extends Controller
{
    public function show(Request $request) {
        
        $validation = $request->validate([
            'name'=> 'required | max:10',
            'password'=> 'required'
        ]);

        print_r($validation);
    }

}
