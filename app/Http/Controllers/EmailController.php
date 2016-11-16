<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{

    public function send($id, $percentage){

        //$users = DB::table('users')->where('mail', '=', 1)->pluck('email');

        //foreach ($users as $user) {

            Mail::send('mails.send', ['id' => $id, 'percentage' => $percentage], function ($message)
            //use ($user)
            {
                //$user
                $message->to('vermost.w@gmail.com')->subject('Silo bijna vol!');

            });

       // }



    }
}
