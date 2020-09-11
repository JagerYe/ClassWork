<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index()
    {
        return view('home.index');
    }

    function sayHellow(Request $request)
    {
        // return view('home.hellow', ['who' => $request->userName]);
        return view('home.hellow')->withWho($request->userName);
    }
}
