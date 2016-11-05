<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Primesilo;
use App\Rawmaterial;
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

        $rawmaterial = \App\Rawmaterial::all();
        $data['rawmaterial'] = $rawmaterial;

        return view('silo.index', $data);
    }

    public function add()
    {
        $id = Input::get('textName');

        DB::table('primesilos')->insert(
            array('quantity' => '0', 'id' => $id, 'rawmaterial_id' => 6)
        );

        return redirect('silo');
    }

    public function addShow()
    {
        return view('silo.add');
    }

    public function remove($id)
    {
        DB::table('primesilos')->where('id', '=', $id)->delete();

        return redirect('silo');
    }

    public function edit($id)
    {
        $newID = Input::get('txtName');
        $rawmaterialID = Input::get('txtGrondstof');
        $quantity = Input::get('txtHoeveelheid');
        \App\Primesilo::where('id', '=', $id)->update(array('id' => $newID, 'quantity' => $quantity,'rawmaterial_id' => $rawmaterialID));

        if($quantity >= 90){
            app('App\Http\Controllers\EmailController')->send($id, $quantity);
        }
        return redirect('silo');
    }

    public function editShow($id)
    {
       $primesiloinhoud = \App\Primesilo::with('grondstof')->where('id', '=', $id)->get();

        $primesiloinhouds = \App\Primesilo::all();
        $data['primesilos'] = $primesiloinhouds;

        $data['primesilo'] = $primesiloinhoud;

        $rawmaterial = \App\Rawmaterial::all();
        $data['rawmaterial'] = $rawmaterial;

        return view('silo.edit', $data);
    }

}
