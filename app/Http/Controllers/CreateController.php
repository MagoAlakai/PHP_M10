<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index(){
        return view('catalog/create');
    }

    public function create(Request $request) {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'year' => 'required|integer|max:4'
          ],[
              'name.required' => 'El campo name es obligatorio!',
              'year.integer' => 'Please insert only numbers!',
              'year.required' => 'The year field is mandatory!'
          ]);
    }
}
