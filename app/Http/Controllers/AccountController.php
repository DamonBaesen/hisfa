<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\User;
use DB;
use App\Quotation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Image;
use Illuminate\Support\Facades\Auth;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class AccountController extends Controller
{
    
    public function getData(){

            return view('account.index');

    }

    use RegistersUsers;
    
    
    
     protected function add(Request $request)
    {
                $user = new \App\User();
                $user->name = Input::get('textName');
                $user->email = Input::get('textEmail');
                $user->password = Hash::make(Input::get('textWachtwoord'));
                $user->save();
                $user->givePermissionTo('viewdashboard');
                return view('account.add');
     }
         
         
    
    protected function addShow()
    {
        return view('account.add');
    }



    public function changePassword(){

        if($_POST['input_password1'] === $_POST['input_password2']){

            $user = Auth::user();
            $user->password =  Hash::make($_POST['input_password1']);
            $user->save();

            return redirect('account')->with('message', 'Wachtwoord aangepast.');
        }else{
            return redirect('account')->with('message', 'Wachtwoorden komen niet overeen.');
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
        return redirect('account')->with('message', 'Gegevens succesvol aangepast.');
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
        return redirect('account')->with('message', 'Profielfoto aangepast.');

    }

}
