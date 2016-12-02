<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 use App\Http\Requests;
 use DB;
 use App\Quotation;
use Illuminate\Support\Facades\Input;

class BlockController extends Controller
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
       $stock = \App\Stock::with('stok')
                ->where('height', '4')
                ->orwhere('height', '6')
                ->orwhere('height', '8')
                ->get();
            $data['stock'] = $stock;
        
        $customstock = \App\Stock::with('stok')
            ->where('height', '!=' ,'4')
            ->where('height','!=' , '6')
            ->where('height','!=' , '8')
            ->get();
        $data['customstock'] = $customstock;

        $qualityinhoud = \App\Qualitie::all();
        $data['qualitys'] = $qualityinhoud;

        $blockinhoud = \App\stock::all();
        $data['allblocks'] = $blockinhoud;
        
        return view('block.index', $data);
    }

    public function add($id)
    {
        $height = Input::get('textHeight');
        
        \App\Stock::where('qualitie_id', '=', $id)->update(array('height' => $height));
        /*
        $userid = Auth::id();
        DB::table('histories')->insert(
            array('action' => 'add', 'silonr' => "", 'block' => $name , 'quality' => "", 'rawmaterial' => "" , 'sector' => 'block', 'user_id' => $userid, 'updated_at' => date("Y-m-d H:i:s"))
        );
        */
        return redirect('block');
    }
    
    public function addShow($id)
    {
        //show quality
        $quality = \App\Qualitie::where('id', '=', $id)->get();
        $data['quality'] = $quality;
        return view('block.add', $data);
    }

    public function edit()
    {
        return view('block.edit');
    }

    public function remove()
    {
        return view('block.remove');
    }
}























