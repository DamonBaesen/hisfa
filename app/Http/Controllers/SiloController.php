<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiloController extends Controller
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
        return view('silo');
    }

    public function add()
    {
        return view('siloadd');
    }

    public function remove()
    {
        return view('siloremove');
    }

    public function edit()
    {
        return view('siloedit');
    }
}
