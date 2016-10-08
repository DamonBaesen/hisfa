<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Quotation;

class AccountController extends Controller
{
    public function getData(){
        // to do -> id vervangen door huidige session id
        $user = DB::table('users')->where('id', '2')->first();
        $data['user'] = $user;
        return view('account', $data);

    }

    public function changePassword(){
        // to do -> id vervangen door huidige session id
        if($_POST['input_password1'] === $_POST['input_password2']){
            DB::table('users')
                ->where('id', 2)
                ->update(['password' => $_POST['input_password2']]);

            return redirect('account')->with('message', 'Password successfully changed.');
        }
    }

    public function changeUserInformation(){
        // to do -> id vervangen door huidige session id
        DB::table('users')
            ->where('id', 2)
            ->update(array(
                'name'          => $_POST['name'],
                'email'          => $_POST['email']
            ));
        return redirect('account')->with('message', 'Account information succesfully changed.');
    }

}
