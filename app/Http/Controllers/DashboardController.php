<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use App\Http\Requests;
 use DB;
 use App\Quotation;



class DashboardController extends Controller
{
    public function index(){
                // to do -> id vervangen door huidige session id
                $primesilo = DB::table('primesilos')->get();
                $recyclesilo = DB::table('recyclesilos')->get();

               $data2['recyclesilo'] = $recyclesilo;
                $data['silo'] = $primesilo;

        return view('dashboard', $data, $data2);


      //  return view('dashboard', $data);
     }
}
