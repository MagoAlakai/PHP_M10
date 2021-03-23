<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index($id){
        return view('catalog/edit', compact('id'));
    }

    public function edit(Request $request) {
        $request->validate([
          'name' => 'required',
          'author' => 'required',
          'year' => 'required|integer'
        ],[
            'name.required' => 'El campo name es obligatorio!',
            'year.integer' => 'Please insert only numbers!',
            'year.required' => 'The year field is mandatory!'
        ]);

        //Validación para lanzar error con input vacío sin validación
        $captcha = $request->input('captcha');
        if($captcha == null){
             return redirect('error404');
        }else{
            return 'Libro editado correctamente';
        }
    }
}
