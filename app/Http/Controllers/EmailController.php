<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{

    public function send($id, $percentage){


        $title = "Hallo,";

        Mail::send('mails.send', ['title' => $title, 'id' => $id, 'percentage' => $percentage], function ($message)
        {

            $message->to('vermost.w@gmail.com');

        });



    }

}
