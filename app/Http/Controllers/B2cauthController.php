<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;


class B2cauthController extends Controller
{
    //

    public function userstore(Request $data){
        $data->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

         User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            "role" =>0,
            "status"=>0,
            'password' => Hash::make($data['password']),
        ]);
        return redirect()->back()->with('message', 'Register Success!');
    }

    public function userlogin(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
        $input = $request->all();
        if (auth()->attempt((array("email" => $input["email"], 'password' => $input["password"])))) {
           $user =  User::where('email', $input["email"])->first();
            session(['Uname' => $user->name]);
            return redirect()->back()->with('message', 'Login Success!');

        }
        else{
            return redirect()->back()->with("error", "Email and Password Are Wrong!");

        }
    }

    public function Ulogout(){
        Session::forget('Uname');
        return redirect('b2c/index');    }
}
