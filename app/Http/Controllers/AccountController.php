<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use DB;
use App\Quotation;
use Illuminate\Support\Facades\Hash;
use Image;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function getData(){

            return view('account');

    }

    public function add(){

            return view('accountadd');

    }


    public function changePassword(){

        if($_POST['input_password1'] === $_POST['input_password2']){

            $user = Auth::user();
            $user->password =  Hash::make($_POST['input_password1']);
            $user->save();

            return redirect('account')->with('message', 'Password successfully changed.');
        }else{
            return redirect('account')->with('message', 'Passwords do not match.');
        }
    }

    public function changeUserInformation(){
        // to do -> id vervangen door huidige session id
        $checkboxval = 0;
        if(isset($_POST['checkbox_mail'])){
            $checkboxval = 1;
        }


        $user = Auth::user();
        $user->name = trim($_POST['name']);
        $user->email= trim($_POST['email']);
        $user->mail= $checkboxval;
        $user->save();
        return redirect('account')->with('message', 'Account information succesfully changed.');
    }

    public function updatePhoto(Request $request){

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

            $user = Auth::user();
            $user->foto = $filename;
            $user->save();
        }
        return redirect('account')->with('message', 'Photo succesfully changed.');

    }

}
