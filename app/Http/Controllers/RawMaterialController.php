<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RawMaterialController extends Controller
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
        return view('rawmaterial');
    }

    public function add()
    {
        return view('rawmaterialadd');
    }

    public function remove()
    {
        return view('rawmaterialremove');
    }

    public function edit()
    {
        return view('rawmaterialedit');
    }
}
