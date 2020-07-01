<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
         return view('form');
    }

    public function welcome_post(Request $request)
    {
        $firstname = $request["firstname"];
        $lastname = $request["lastname"];
        return view('welcome',['firstname' => $firstname], ['lastname'=> $lastname]);
    }
 
}