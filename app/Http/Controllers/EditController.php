<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index($id){
        return view('catalog/edit', compact('id'));
    }
}
