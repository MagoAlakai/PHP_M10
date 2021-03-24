<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use RealRashid\SweetAlert\Facades\Alert;

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
        Cookie::queue(Cookie::make('login', $request->name, 60));
        // if($name !== null){

        //     Alert::info('Info about Cookies', 'On loging in, you accept the cookies!');
        //     echo "
        //     <div class='container mt-4 w-50 alert alert-success'>
        //         <p class='text-center'>Your login has been successful!</p>
        //     </div>
        //     ";
        // }else{
        //     return redirect('error404');
        // }
        return view('catalog/index');
    }
}
