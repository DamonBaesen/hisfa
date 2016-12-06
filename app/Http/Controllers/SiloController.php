<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

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
        $exist = false;
        $primesiloinhoud = \App\Primesilo::all();

        $id = Input::get('textName');

        foreach($primesiloinhoud as $silo)
        {
            if($silo->id = $id)
            {
                $exist = true;
            }
        }

        if($exist == false)
        {
            DB::table('primesilos')->insert(
                array('quantity' => '0', 'id' => $id, 'rawmaterial_id' => 999)
            );

            $userid = Auth::id();
            DB::table('histories')->insert(
                array('action' => 'add', 'silonr' => $id, 'block' => "" , 'quality' => "", 'rawmaterial' => "" , 'sector' => 'silo', 'user_id' => $userid, 'updated_at' => date("Y-m-d H:i:s"))
            );

        }
            return redirect('silo');

    }

    public function addShow()
    {
        return view('silo.add');
    }

    public function remove($id)
    {
        DB::table('primesilos')->where('id', '=', $id)->delete();

        $userid = Auth::id();
        DB::table('histories')->insert(
            array('action' => 'remove', 'silonr' => $id, 'block' => "" , 'quality' => "", 'rawmaterial' => "" , 'sector' => 'silo', 'user_id' => $userid, 'updated_at' => date("Y-m-d H:i:s"))
        );

        return redirect('silo');
    }

    public function edit($id)
    {
        $newID = Input::get('txtName');
        $rawmaterialID = Input::get('txtGrondstof');
        $quantity = Input::get('txtHoeveelheid');
        
        //update using naar null wanneer niet meer gebruikt 
        
        
        
        $raw = DB::table('rawmaterials')->pluck('id');
        foreach($raw as $material){
                //update using naar "1" wanneer gebruikt
                if ($material == $rawmaterialID){
                    \App\Rawmaterial::where('id', '=', $material)->update(array('using' => 1));
                }
        }
        
        \App\Primesilo::where('id', '=', $id)->update(array('id' => $newID, 'quantity' => $quantity,'rawmaterial_id' => $rawmaterialID));
        
        if($quantity >= 90){
            app('App\Http\Controllers\EmailController')->sendprime($id, $quantity);
        }
        
        $userid = Auth::id();
        DB::table('histories')->insert(
            array('action' => 'edit', 'silonr' => $id, 'block' => "" , 'quality' => "", 'rawmaterial' => "" , 'sector' => 'silo', 'user_id' => $userid, 'updated_at' => date("Y-m-d H:i:s"))
        );

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
