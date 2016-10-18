<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Primesilo;


use DB;
use App\Quotation;
use Illuminate\Support\Facades\Input;
use App\Rawmaterial;
use App\Http\Requests;


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
        $qualitie = DB::table('qualities')
            ->select('name','id')->get();
        $data['quality'] = $qualitie;

        $rawmaterial = DB::table('rawmaterials')->select('type', 'quantity')->get();
        $data['rawmaterial'] = $rawmaterial;

        $primesiloinhoud = \App\Primesilo::all();
        $data['primesilo'] = $primesiloinhoud;

        return view('silo', $data);
    }

    public function add()
    {
        $id = Input::get('textName');

        DB::table('primesilos')->insert(


            array('quantity' => '0', 'id' => $id, 'rawmaterial_id' => 6)

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

    public function edit($id)
    {
        $newID = Input::get('txtName');
        $rawmaterialID = Input::get('txtGrondstof');
        $quantity = Input::get('txtHoeveelheid');
        \App\Primesilo::where('id', '=', $id)->update(array('id' => $newID, 'quantity' => $quantity,'rawmaterial_id' => $rawmaterialID));

        $primesiloinhoud = \App\Primesilo::all();
        $data['primesilo'] = $primesiloinhoud;



        if($quantity >= 90){
            app('App\Http\Controllers\EmailController')->send($id, $quantity);
        }
        return view('silo', $data);
    }

    public function editShow($id)
    {
       $primesiloinhoud = \App\Primesilo::with('grondstof')->where('id', '=', $id)->get();

        $primesiloinhouds = \App\Primesilo::all();
        $data['primesilos'] = $primesiloinhouds;

        $data['primesilo'] = $primesiloinhoud;

        $rawmaterial = \App\Rawmaterial::all();
        $data['rawmaterial'] = $rawmaterial;

        return view('siloedit', $data);
    }
}
