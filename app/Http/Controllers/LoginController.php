<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth/login');
    }

    public function check(Request $request){

        $request->validate([
            'name' => 'required',
            'password' => 'required',
          ]);

        $name = $request->input('name');

        if($name !== null){
            echo "
            <div class='container mt-4 w-50 alert alert-success'>
                <p class='text-center'>Your login has been successful!</p>
            </div>
            ";
        }else{
            return redirect('error404');
        }
        return view('auth/login');
    }
}
