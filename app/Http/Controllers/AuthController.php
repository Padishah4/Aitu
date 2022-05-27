<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view("/login");
    }
    public function login(Request $request){
        $data = $request->validate([
            "email" => ["required","email", "string"],
            "password" =>["required"]
        ]);

       if( auth("web")->attempt($data)){
           return redirect(route("home"));
       }

        return redirect(route("login"))->withErrors(["email" => "The user was not found , or the data was entered incorrectly"]);

    }
    public function logout(){
        auth("web")->logout();
        return redirect(route("home"));
    }
    public function showRegisterForm(){
        return view("/registration");
    }

    public function registration(Request $request){
   $data = $request->validate([
     "name" => ["required","string"],
     "email" => ["required","email", "string","unique:users,email"],
     "password" =>["required","confirmed"]
     ]);

   $user = User::create([
     "name"=> $data["name"],
       "email"=> $data["email"],
       "password" => bcrypt($data["password"])
   ]);
    if ($user) {
        auth("web")->login($user);
    }
    return redirect(route("home"));

    }
}
