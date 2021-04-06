<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view("form");
    }

    public function welcome(Request $request){
        $firstName = $request['first-name'];
        $lastName = $request['last-name'];
        $fullName = $firstName . " " . $lastName;
        return view("welcome", ['fullName' => $fullName]);
    }
}
