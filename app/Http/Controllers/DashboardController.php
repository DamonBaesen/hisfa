<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use App\Http\Requests;
 use DB;
 use App\Quotation;



class DashboardController extends Controller
{
    public function index(){
             $primesiloinhoud = DB::table('rawmaterials')
            ->join('primesilos', 'rawmaterials.materialid', '=', 'primesilos.materialid')
            ->select('primesilos.*', 'rawmaterials.type' )
            ->get();
            $data['primesilo'] = $primesiloinhoud;


            $recyclesilo = DB::table('recyclesilos')->select('recyclesiloid', 'volume')->get();
            $data['recyclesilo'] = $recyclesilo;


            $rawmaterial = DB::table('rawmaterials')->select('type', 'quantity')->get();
            $data['rawmaterial'] = $rawmaterial;


            $stock = DB::table('stock')
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

        $quality = DB::table('quality')
            ->select('name','qualityid')->get();
        $data['quality'] = $quality;

        $stockload = DB::table('stock')
            ->select('height','quantity')
            ->where('qualityid','=','1')
            ->get();
        $data['stockload'] = $stockload;

        return view('dashboard', $data);

     }
}
