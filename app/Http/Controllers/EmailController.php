<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{

    public function sendprime($id, $quantity, $newID){
            
        //ik wil enkel mails ontvagen wanneer een primesilo vol is  
        //email moet to($p) worden!!
        $prime = DB::table('users')->where('mail', '=', 2)->pluck('email');
        
        foreach ($prime as $p) {

            Mail::send('mails.send', ['id' => $id, 'quantity' => $quantity], function ($message)
            {
                $message->to('billie.peeters@gmail.com')->subject('Primesilo ', $newID, ' bijna vol!');
            });
            
        //ik wil  mails ontvagen wanneer een primesilo en een recycle silo vol is
        $prime = DB::table('users')->where('mail', '=', 1)->pluck('email');
        
        foreach ($prime as $p) {

            Mail::send('mails.send', ['id' => $id, 'quantity' => $quantity], function ($message)
            {
                $message->to('billie.peeters@gmail.com')->subject('Primesilo ', $newID, ' bijna vol!');
            });   
    }
}
    }
    
    
    public function sendrecycle($id, $quantity){
            
        //ik wil enkel mails ontvagen wanneer een recyclesilo vol is    
        $prime = DB::table('users')->where('mail', '=', 3)->pluck('email');
        
        foreach ($prime as $p) {

            Mail::send('mails.send', ['id' => $id, 'quantity' => $quantity], function ($message)
            {
                $message->to('billie.peeters@gmail.com')->subject('Primesilo ', $id, ' almost full!');
                
            });
            
        //ik wil  mails ontvagen wanneer een primesilo en een recycle silo vol is
        $prime = DB::table('users')->where('mail', '=', 1)->pluck('email');
        
        foreach ($prime as $p) {

            Mail::send('mails.send', ['id' => $id, 'quantity' => $quantity], function ($message)
            {
                $message->to('billie.peeters@gmail.com')->subject('Recyclesilo ', $id, ' almost full!');
            });   
    }
}
    }
    
}
