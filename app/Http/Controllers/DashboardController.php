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

        $eventlog = \App\History::orderBy('id', 'DESC')->take(6)->get();
            $data['eventlog'] = $eventlog;

        return view('dashboard', $data);
     }

    public function ajax(){
        $id = $_GET['id'];
        $result = \App\Stock::with('stok')
            ->where('qualitie_id',$id)
            ->get();
        $html="";
        foreach($result as $row) {
            $html = $html ."<div class='stock-container' ><h2>" . $row->height . "m" .'</h2><h3 >' . $row->quantity . "blocks </h3 >
                        <div class='oppervlak' >" . round($row->height * $row->quantity * 1.03 * 1.29, 2) . "m³  </div >  </div > ";
            }
        return $html;
        }

    public function events(){
        $history = \App\History::orderBy('id', 'DESC')->get();
        $data['history'] = $history;

        return $history;
    }
}
