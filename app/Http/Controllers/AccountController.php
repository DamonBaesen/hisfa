<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account');
    }

    public function add()
    {
        return view('accountadd');
    }

    public function remove()
    {
        return view('accountremove');
    }

    public function edit()
    {
        return view('accountedit');
    }
}
