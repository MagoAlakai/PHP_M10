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
            'year' => 'required|integer'
          ],[
              'name.required' => 'El campo name es obligatorio!',
              'year.integer' => 'Please insert only numbers!',
              'year.required' => 'The year field is mandatory!'
          ]);

        //Asocia variables a los datos de inputs, y creo un array
        $name = $request->input('name');
        $author = $request->input('author');
        $year = $request->input('year');
        $newBook = [
            'name' => $name,
            'author' => $author,
            'year' => $year];

        //Validación para lanzar error con input vacío sin validación
        $captcha = $request->input('captcha');
        if($captcha == null){
             return redirect('error404');
        }else{

        //Una vista nueva para mostrar libro creado
        return view('catalog/created')->with($newBook);
        }

    }
}
