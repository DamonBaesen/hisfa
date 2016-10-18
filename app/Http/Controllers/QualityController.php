<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Stock;
use App\Qualitie;
use DB;
use App\Quotation;
use Illuminate\Support\Facades\Input;

 use App\Http\Requests;

class QualityController extends Controller
{
    public function index()
    {
        $data = DB::table('qualities')->get();

        return view('quality' ,compact('data'));
    }

    public function add()
    {
        return view('quality');
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















