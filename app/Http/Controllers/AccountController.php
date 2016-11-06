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
        
         
        
         if($request->hasFile('filePicture'))
            {
                 $image = Image::make(Input::file('filePicture'));
             
                $extension = Input::file('filePicture')->getClientOriginalExtension();
             
                print_r($extension);
             
               $fileName = rand(11111, 99999) . time() . '.' . $extension;
        
                $imagePath = 'uploads/avatars' . $fileName;
                
                $name = Input::get('textName');
                $email= Input::get('textEmail');
                $password = Hash::make(Input::get('textQuantity'));
             
                $id = DB::table('users')->insertGetId(
                    array('name' => $name, 'email' => $email, 'password' => $password, 'foto' => $fileName )
                );
                
                return view('account.index');
            
         
                
            }
         
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
