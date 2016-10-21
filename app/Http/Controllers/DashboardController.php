<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use App\Http\Requests;
 use DB;
 use App\Quotation;

use App\Primesilo;
use App\Rawmaterial;
use App\Recyclesilo;


class DashboardController extends Controller
{
    public function index(){

        $primesiloinhoud = \App\Primesilo::with('grondstof')->get();
            $data['primesilo'] = $primesiloinhoud;


            $recyclesilo = \App\Recyclesilo::all();
            $data['recyclesilo'] = $recyclesilo;


        $rawmaterial = \App\Rawmaterial::all();
            $data['rawmaterial'] = $rawmaterial;




           $stock = \App\Stock::with('stok')
                ->where('height', '4')
                ->orwhere('height', '6')
                ->orwhere('height', '8')
                ->get();
            $data['stock'] = $stock;

        $selectQuality =\App\Stock::with('stok')
            ->where('qualitie_id','1')
            ->get();
        $data['selectQuality'] = $selectQuality;

        $customstock = \App\Stock::with('stok')
            ->where('height', '!=' ,'4')
            ->where('height','!=' , '6')
            ->where('height','!=' , '8')
            ->get();
        $data['customstock'] = $customstock;

        $qualities = DB::table('qualities')
            ->select('name','id')->get();
        $data['qualities'] = $qualities;

        $eventlog = \App\History::all();
            $data['eventlog'] = $eventlog;

        return view('dashboard', $data);

     }
}
