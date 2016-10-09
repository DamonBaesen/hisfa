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
                $data['primesilo'] = $primesilo;
                return view('dashboard', $data);
     }
}
