<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use DB;
use App\Quotation;
use Image;

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
        $checkboxval = 0;
        if(isset($_POST['checkbox_mail'])){
            $checkboxval = 1;
        }
         DB::table('users')
            ->where('id', 2)
            ->update(array(
                'name'          => $_POST['name'],
                'email'         => $_POST['email'],
                'mail'          => $checkboxval
            ));
        return redirect('account')->with('message', 'Account information succesfully changed.');
    }

    public function updatePhoto(Request $request){

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
            DB::table('users')
                ->where('id', 2)
                ->update(array(
                    'foto'          => $filename,

                ));
        }
        return redirect('account')->with('message', 'Photo succesfully changed.');

    }

}
