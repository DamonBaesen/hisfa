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


        $recyclesilo = DB::table('recyclesilos')->select('recyclesiloid', 'quantity')->get();
        $data['recyclesilo'] = $recyclesilo;


        $rawmaterial = DB::table('rawmaterials')->select('type', 'quantity')->get();
        $data['rawmaterial'] = $rawmaterial;








        return view('dashboard', $data);

     }
}
