<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use App\Http\Requests;
 use DB;
 use App\Quotation;

use App\Primesilos;
use App\Rawmaterials;
use App\Recyclesilos;


class DashboardController extends Controller
{
    public function index(){
             $primesiloinhoud = \App\Rawmaterials::all();
            $data['primesilo'] = $primesiloinhoud;


            $recyclesilo = \App\Recyclesilos::all();
            $data['recyclesilo'] = $recyclesilo;


        $rawmaterial = \App\Rawmaterials::all();
            $data['rawmaterial'] = $rawmaterial;


           /* $stock = DB::table('stock')
                ->join('quality', 'stock.qualityid', '=', 'quality.qualityid')
                ->select('stock.*', 'quality.name' )
                ->where('stock.height', '4')
                ->orwhere('stock.height', '6')
                ->orwhere('stock.height', '8')
                ->get();
            $data['stock'] = $stock;


        $stock2 = DB::table('stock')
            ->join('quality', 'stock.qualityid', '=', 'quality.qualityid')
            ->select('stock.*', 'quality.name' )
            ->where('stock.height', '!=' ,'4')
            ->where('stock.height','!=' , '6')
            ->where('stock.height','!=' , '8')
            ->get();
        $data['customstock'] = $stock2;

*/


        return view('dashboard', $data);

     }
}
