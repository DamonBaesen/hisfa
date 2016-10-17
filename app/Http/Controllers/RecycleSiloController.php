<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recyclesilosilo;
use DB;
use App\Quotation;
use Illuminate\Support\Facades\Input;

class RecycleSiloController extends Controller
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
        $recyclesiloinhoud = \App\Recyclesilo::all();
        $data['recyclesilo'] = $recyclesiloinhoud;
        return view('recyclesilo', $data);
    }

    public function add()
    {
        $id = Input::get('textName');
        $hardness = Input::get('txtHardheid');
        DB::table('recyclesilos')->insert(
            array('quantity' => '0', 'id' => $id, 'type' => $hardness)
        );

        $recyclesiloinhoud = \App\Recyclesilo::all();
        $data['recyclesilo'] = $recyclesiloinhoud;
        return view('recyclesilo', $data);
    }

    public function addShow()
    {
        return view('recyclesiloadd');
    }

    public function remove($id)
    {
        DB::table('recyclesilos')->where('id', '=', $id)->delete();

        $recyclesiloinhoud = \App\Recyclesilo::all();
        $data['recyclesilo'] = $recyclesiloinhoud;
        return view('recyclesilo', $data);
    }

    public function edit($id)
    {
        $newID = Input::get('txtName');
        $quantity = Input::get('txtHoeveelheid');
        $hardness = Input::get('txtHardheid');
        \App\Recyclesilo::where('id', '=', $id)->update(array('id' => $newID, 'quantity' => $quantity, 'type' => $hardness));

        $recyclesiloinhoud = \App\Recyclesilo::all();
        $data['recyclesilo'] = $recyclesiloinhoud;



        if($quantity >= 90){
            app('App\Http\Controllers\EmailController')->send($id, $quantity);
        }
        return view('recyclesilo', $data);
    }

    public function editShow($id)
    {
        $recyclesiloinhoud = \App\Recyclesilo::where('id', '=', $id)->get();

        $recyclesiloinhouds = \App\Recyclesilo::all();
        $data['recyclesilos'] = $recyclesiloinhouds;

        $data['recyclesilo'] = $recyclesiloinhoud;

        return view('recyclesiloedit', $data);
    }

}
