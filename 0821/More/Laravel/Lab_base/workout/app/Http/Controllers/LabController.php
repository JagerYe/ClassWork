<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    //
    function index()
    {
        return "Lab Controller index action";
    }

    function show($id, $name)
    {
        dd($id . " " . $name);
    }

    //一碰到dd()該行執行完就直接結束
    function param(Request $request)
    {
        // dd($request->all());
        // dd($request->query());
        // dd($request->query('data'));
        // dd($request->input());
        dd($request->input('data'));
    }

    function getForm()
    {
        return view("lab.aForm");
    }

    //id跟Request兩者是不同系統
    function postForm(Request $request, $id)
    {
        echo $id;
        dd($request->all());
    }

    function xml()
    {
        $content = "<book><title>ooo</title><price>500</price></book>";
        return response(
            $content,
            200,
            [
                'Content-Type' => 'application/xml'
            ]
        );
    }

    function memberOnly()
    {
        return redirect('lab/form');
    }
}
