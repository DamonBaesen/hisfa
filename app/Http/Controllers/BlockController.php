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
        
        return view('block.index', $data);
    }

    public function add()
    {
        $name = Input::get('textName');
        $hardness = Input::get('txtHardheid');
        DB::table('stocks')->insert(
            array('height' => $name, 'quantity' => 10, 'qualitie_id' => 1)
        );

        $userid = Auth::id();
        DB::table('histories')->insert(
            array('action' => 'add', 'silonr' => "", 'block' => $name , 'quality' => "", 'rawmaterial' => "" , 'sector' => 'block', 'user_id' => $userid, 'updated_at' => date("Y-m-d H:i:s"))
        );

        return redirect('block');
    }
    
    public function addShow()
    {
        return view('block.add');
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























