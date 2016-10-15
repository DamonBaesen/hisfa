<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Primesilo;
use DB;
use App\Quotation;
use Illuminate\Support\Facades\Input;

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
        $id = Input::get('textName');

        DB::table('primesilos')->insert(
            array('quantity' => '0', 'id' => $id)
        );

        $primesiloinhoud = \App\Primesilo::all();
        $data['primesilo'] = $primesiloinhoud;
        return view('silo', $data);
    }

    public function addShow()
    {
        return view('siloadd');
    }

    public function remove($id)
    {
        DB::table('primesilos')->where('id', '=', $id)->delete();

        $primesiloinhoud = \App\Primesilo::all();
        $data['primesilo'] = $primesiloinhoud;
        return view('silo', $data);
    }

    public function edit()
    {
        return view('siloedit');
    }

    public function editShow()
    {
        return view('siloedit');
    }
}
