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


        $qualityinhoud = \App\Qualitie::all();
        $data['qualitys'] = $qualityinhoud;

        $blockinhoud = \App\stock::orderBy('height', 'ASC')->orderBy('qualitie_id', 'ASC')->get();
        $data['allblocks'] = $blockinhoud;

        return view('block.index', $data);
    }

    public function add($id)
    {
        $quality = Input::get('textQuality');
        $quantity = Input::get('textQuantity');
        $height = Input::get('textHeight');
        
        $exists = DB::table('stocks')
            ->where('qualitie_id', '=', $id)
            ->where('height', '=', $height)
            ->pluck('height');

        $quantityNow = DB::table('stocks')
            ->where('qualitie_id', '=', $id)
            ->where('height', '=', $height)
            ->pluck('quantity')
            ->first();

        if(count($exists) == 0)
        {
            DB::table('stocks')
                ->where('id', '=', $id)
                ->insert(array('qualitie_id' => $quality, 'quantity' => $quantity, 'height' => $height));
        }
        else
        {
            $quantityNow = $quantityNow + $quantity;
            DB::table('stocks')
                ->where('height', '=', $height)
                ->where('qualitie_id', '=', $id)
                ->update(array('qualitie_id' => $id, 'quantity' => $quantityNow, 'height' => $height));
        }

        return redirect('block');
    }
    
    public function addShow($id)
    {
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

        return redirect('block');
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

        return redirect('block');
    }
}























