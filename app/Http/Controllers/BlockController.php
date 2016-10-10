<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlockController extends Controller
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
        return view('block');
    }

    public function add()
    {
        return view('blockadd');
    }

    public function edit()
    {
        return view('blockedit');
    }

    public function remove()
    {
        return view('blockremove');
    }
}
