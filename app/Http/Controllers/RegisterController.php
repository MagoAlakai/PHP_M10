<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth/register');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'passport' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirmPassword' => 'required',
          ]);

        $name = $request->input('name');

        if($name !== null){
            echo "
            <div class='container mt-4 w-50 alert alert-success'>
                <p class='text-center'>Your registration has been successful!</p>
            </div>
            ";
        }else{
            return redirect('error404');
        }
        return view('auth/register');


    }
}
