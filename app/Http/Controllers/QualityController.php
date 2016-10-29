<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        
        $id = DB::table('qualities')->insertGetId(
            array('name' => $name, 'hardness' => $hardness)
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

        return redirect('quality');
    }

    public function editShow()
    {
        return view('quality.edit');
    }

    public function remove($id)
    {
        Qualitie::whereId($id)->delete();



        return redirect('quality');
    }
}















