<?php

// FormController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
{
    return view('create');
}

public function store(Request $request)
{
        $validatedData = $request->validate([
            'item_name' => 'required|string',
            'price' => 'required|numeric',
        ]);
        \App\Form::create($validatedData);

        return response()->json('Form is successfully validated and data has been saved');

        $validatedData = $request->validate([
            'item_name' => 'required|string',
            
            'price' => 'required|numeric',
       ]);
}
}