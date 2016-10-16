<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class EmailController extends Controller
{

    public function send(Request $request, $id){

        $user = User::findOrFail($id);

        Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
            $m->from('hello@app.com', 'Your Application');

            $m->to($user->email, $user->name)->subject('Your Reminder!');
        });


    }

}
