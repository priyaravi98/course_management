<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Userdetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request){

        $request->validate(

            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required|confirmed'
            ]
            );
    $user= new User;
    $user->name= $request -> input('name');
    $user->email= $request -> input('email');
    $user->password= HASH::make($request -> input('password'));

    $user->save();

    $user5= new Userdetails;
    $user5->firstname= $request -> input('name');
    $user5->email= $request -> input('email');  

    $user5->save();


    //Auth::login($user);

    return redirect('/login');

}
} 