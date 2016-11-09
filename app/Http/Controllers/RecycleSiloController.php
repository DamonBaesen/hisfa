<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
        return view('recyclesilo.index', $data);
    }

    public function add()
    {
        $id = Input::get('textName');
        $hardness = Input::get('txtHardheid');
        DB::table('recyclesilos')->insert(
            array('quantity' => '0', 'id' => $id, 'type' => $hardness)
        );

        $userid = Auth::id();
        DB::table('histories')->insert(
            array('action' => 'add', 'silonr' => $id, 'block' => "", 'sector' => 'recyclesilo', 'user_id' => $userid)
        );

        return redirect('recyclesilo');
    }

    public function addShow()
    {
        return view('recyclesilo.add');
    }

    public function remove($id)
    {
        DB::table('recyclesilos')->where('id', '=', $id)->delete();

        $userid = Auth::id();
        DB::table('histories')->insert(
            array('action' => 'remove', 'silonr' => $id, 'block' => "", 'sector' => 'recyclesilo', 'user_id' => $userid)
        );

        return redirect('recyclesilo');
    }

    public function edit($id)
    {
        $newID = Input::get('txtName');
        $quantity = Input::get('txtHoeveelheid');
        $hardness = Input::get('txtHardheid');
        \App\Recyclesilo::where('id', '=', $id)->update(array('id' => $newID, 'quantity' => $quantity, 'type' => $hardness));

        if($quantity >= 90){
            app('App\Http\Controllers\EmailController')->send($id, $quantity);
        }

        $userid = Auth::id();
        DB::table('histories')->insert(
            array('action' => 'edit', 'silonr' => $id, 'sector' => 'recyclesilo', 'block' => "",  'user_id' => $userid)
        );

        return redirect('recyclesilo');
    }

    public function editShow($id)
    {
        $recyclesiloinhoud = \App\Recyclesilo::where('id', '=', $id)->get();

        $recyclesiloinhouds = \App\Recyclesilo::all();
        $data['recyclesilos'] = $recyclesiloinhouds;

        $data['recyclesilo'] = $recyclesiloinhoud;

        return view('recyclesilo.edit', $data);
    }

}
