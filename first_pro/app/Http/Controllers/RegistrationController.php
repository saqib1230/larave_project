<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){


        return view('form');
    }
    public function register(Request $req){
        $req->validate([
'name'=>'required',
'email'=>'required|email',
'password'=>'required',
'confirm_password'=>'required|same:password',

        ]);
print_r($req->all());

    }
}
