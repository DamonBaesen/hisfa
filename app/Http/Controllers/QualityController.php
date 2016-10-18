<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Stock;
use App\Quality;
use DB;
use App\Quotation;
use Illuminate\Support\Facades\Input;

class QualityController extends Controller
{
    public function index()
    {
        $inhoud = \App\Qualitie::all();
        $data['qualities'] = $inhoud;
        return view('quality', $data);
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
        
        return view('qualityadd');
    }
    
    public function addShow()
    {
        return view('blockadd');
    }

    public function edit()
    {
        return view('blockedit');
    }

    public function remove()
    {
        return view('blockremove');
    }
}















