<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Primesilo;

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
        $primesiloinhoud = \App\Primesilo::all();
        $data['primesilo'] = $primesiloinhoud;
        return view('silo', $data);
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
