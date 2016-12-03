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
        $quality = Input::get('textQuality');
        $quantity = Input::get('textQuantity');
        $height = Input::get('textHeight');
        
        $exists = DB::table('stocks')
            ->where('id', '=', $id)
            ->pluck('height');
        
        foreach($exists as $e){
            //als de hoogte nog niet bestaat
            if($height != $e){
                //toevoegen aan databank
                DB::table('stocks')
                    ->where('id', '=', $id)
                    ->insert(array('qualitie_id' => $quality, 'quantity' => $quantity, 'height' => $height));
            }
            
        }
        
        
       /* \App\Stock::with('stok')
            ->where('id', '=', $id)
            ->andwhere('height', '!=', $height)
            ->insert(array('qualitie_id' => $quality, 'quantity' => $quantity, 'height' => $height));
        */
        
        
        /*$userid = Auth::id();
        DB::table('histories')->insert(
            array('action' => 'add', 'silonr' => "", 'block' => $name , 'quality' => "", 'rawmaterial' => "" , 'sector' => 'block', 'user_id' => $userid, 'updated_at' => date("Y-m-d H:i:s"))
        );*/
        
        //return to index
        
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
    
    public function addShow($id)
    {
        //show quality
        $quality = \App\Qualitie::where('id', '=', $id)->get();
        $data['quality'] = $quality;
        return view('block.add', $data);
    }

    public function edit($id)
    {
        $quantity = Input::get('textQuantity');
        DB::table('stocks')
            ->where('id', '=', $id)
            ->update(array('quantity' => $quantity));
        
        //return to index
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
        
        return view('block.index',$data);
    }
    
    public function editShow($id)
    {
        //show block name and height
        $block = \App\Stock::where('id', '=', $id)->get();
        $data['block'] = $block;
    
        
        $quality =  DB::table('qualities')
            ->join('stocks', 'qualities.id', '=', 'stocks.qualitie_id')
            ->whereRaw('qualities.id = stocks.qualitie_id')
            ->where('stocks.id', '=', $id)
            ->get();
        
        $data['quality'] = $quality;
         
        
        
        return view('block.edit', $data);
    }

    public function remove($id)
    {   
        DB::table('stocks')->delete($id);
        
        //hier moet logging komen
        
        
        //return to index
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
}























