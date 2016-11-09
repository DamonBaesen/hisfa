<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rawmaterial;
use DB;
use App\Quotation;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

 use App\Http\Requests;

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
        $rawmaterial = \App\Rawmaterial::all();
        $data['rawmaterial'] = $rawmaterial;
        return view('rawmaterial.index', $data);
    }

    public function add()
    {
        $type = Input::get('textType');
        $quantity = Input::get('textQuantity');

        DB::table('rawmaterials')->insertGetId(
            array('quantity' => $quantity, 'type' => $type)
        );

        $userid = Auth::id();
        DB::table('histories')->insert(
            array('action' => 'add', 'silonr' => "", 'block' => "" , 'quality' => "", 'rawmaterial' => $type , 'sector' => 'rawmaterial', 'user_id' => $userid)
        );
        return redirect('rawmaterial');
    }
    
    public function addShow()
    {
        return view('rawmaterial.add');
    }

    public function remove($id)
    {
        DB::table('rawmaterials')->where('id', '=', $id)->delete();

        $userid = Auth::id();
        DB::table('histories')->insert(
            array('action' => 'remove', 'silonr' => "", 'block' => "" , 'quality' => "", 'rawmaterial' => $id , 'sector' => 'rawmaterial', 'user_id' => $userid)
        );
        return redirect('rawmaterial');
    }
    
    public function edit($id)
    {
        $type = Input::get('textType');
        $quantity = Input::get('textQuantity');
        
        \App\Rawmaterial::where('id', '=', $id)->update(array('quantity' => $quantity, 'type' => $type));

        $userid = Auth::id();
        DB::table('histories')->insert(
            array('action' => 'edit', 'silonr' => "", 'block' => "" , 'quality' => "", 'rawmaterial' => $type , 'sector' => 'rawmaterial', 'user_id' => $userid)
        );

        return redirect('rawmaterial');
    }

    public function editShow($id)
    {
        $rawmatarials = \App\Rawmaterial::where('id', '=', $id)->get();

        $data['rawmaterials'] = $rawmatarials;

        return view('rawmaterial.edit', $data);
    }
    
}
