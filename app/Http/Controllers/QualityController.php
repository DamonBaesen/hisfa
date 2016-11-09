<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Stock;
use App\Qualitie;
use DB;
use App\Quotation;
use Illuminate\Support\Facades\Input;

 use App\Http\Requests;


class QualityController extends Controller
{
    public function index()
    {
        $data = DB::table('qualities')->get();

        return view('quality.index' ,compact('data'));
    }

    public function add()
    {
        $name = Input::get('textName');
        $hardness = Input::get('textHardness');
        
        DB::table('qualities')->insert(
            array('name' => $name, 'hardness' => $hardness)
        );

        $userid = Auth::id();
        DB::table('histories')->insert(
            array('action' => 'add', 'silonr' => "", 'block' => "" , 'quality' => $name, 'rawmaterial' => "" , 'sector' => 'quality', 'user_id' => $userid)
        );
        return redirect('quality');
    }
    
    public function addShow()
    {
        return view('quality.add');
    }
    
    public function edit($id)
    {
        $name = Input::get('textName');
        $hardness = Input::get('textHardness');
        
        \App\Qualitie::where('id', '=', $id)->update(array('name' => $name, 'hardness' => $hardness));

        $userid = Auth::id();
        DB::table('histories')->insert(
            array('action' => 'edit', 'silonr' => "", 'block' => "" , 'quality' => $name, 'rawmaterial' => "" , 'sector' => 'quality', 'user_id' => $userid)
        );

        return redirect('quality');
    }

    public function editShow($id)
    {
        $qualitie = \App\Qualitie::where('id', '=', $id)->get();

        $qualities = \App\Qualitie::all();
        $data['qualities'] = $qualities;

        $data['qualities'] = $qualitie;

        return view('quality.edit', $data);
        
        
    }

    public function remove($id)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Qualitie::destroy($id);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        $userid = Auth::id();
        DB::table('histories')->insert(
            array('action' => 'remove', 'silonr' => "", 'block' => "" , 'quality' => $id, 'rawmaterial' => "" , 'sector' => 'quality', 'user_id' => $userid)
        );

        return redirect('quality');
    }
}















