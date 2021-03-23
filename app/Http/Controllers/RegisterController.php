<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth/register');
    }

    public function store(Request $request){
        //$alert = false;
        $request->validate([
            'name' => 'required',
            'passport' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirmPassword' => 'required',
          ]);


        // if($request->validate()){
        //     echo "
        //     <div class='alert alert-success'>
        //         <p class='text-center'>Your registration has been successful!</p>
        //     </div>
        //     ";
        // }else{
        //     return response('', 404)
        //             -> redirect('error404');
        // }


       // $alert = true;
        return view('auth/register');


    }
}
