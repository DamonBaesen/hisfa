<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use App\Http\Requests;
 use DB;
 use App\Quotation;

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
        
        return view('block', $data);
    }

    public function add()
    {
        $name = Input::get('textName');
        $hardness = Input::get('txtHardheid');
        DB::table('qualities')->insert(
            array('name' => $name, 'hardness' => $hardness)
        );

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
        
        return view('add', $data);
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























