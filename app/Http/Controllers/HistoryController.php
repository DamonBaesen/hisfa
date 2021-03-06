<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
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
        $eventlog = \App\History::orderBy('id', 'DESC')->get();
        $data['eventlog'] = $eventlog;

        return view('history', $data);
    }
}
