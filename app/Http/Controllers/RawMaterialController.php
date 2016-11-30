<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rawmaterial;
use DB;
use App\Quotation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Image;
use App\Http\Requests;
use Illuminate\Database\Query\Builder;


use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RawMaterialController extends Controller
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
        $rawmaterial = \App\Rawmaterial::all();
        $data['rawmaterial'] = $rawmaterial;
        return view('rawmaterial.index', $data);
    }

    public function add()
    {
        $type = Input::get('textType');
        $stock = Input::get('textStock');
        $orderd = Input::get('textOrderd');
        $deliverd = Input::get('textDeliverd');

        DB::table('rawmaterials')->insertGetId(
            array('type' => $type, 'stock' => $stock, 'orderd' => $orderd, 'deliverd' => $deliverd, 'using' => 0)
        );

        $userid = Auth::id();
        DB::table('histories')->insert(
            array('action' => 'add', 'silonr' => "", 'block' => "" , 'quality' => "", 'rawmaterial' => $type , 'sector' => 'rawmaterial', 'user_id' => $userid, 'updated_at' => date("Y-m-d H:i:s"))
        );
        return redirect('rawmaterial');
    }
    
    public function addShow()
    {
        return view('rawmaterial.add');
    }

    public function remove($id)
    {
        /*$prime = DB::table('primesilos')->pluck('rawmaterial_id');
        
        foreach ($prime as $silo)
        {
            if( $id == $silo){
                
                return redirect('/rawmaterial')->with('success', true)->with('message','You can not delete while using'); 
                
            } 
            else
            {
                DB::statement('SET FOREIGN_KEY_CHECKS = 0');
                Rawmaterial::destroy($id);
                DB::statement('SET FOREIGN_KEY_CHECKS = 1');

                $userid = Auth::id();
                DB::table('histories')->insert(
                array('action' => 'remove', 'silonr' => "", 'block' => "" , 'quality' => "", 'rawmaterial' => $id , 'sector' => 'rawmaterial', 'user_id' => $userid, 'updated_at' => date("Y-m-d H:i:s"))
                );
                
                return redirect('/rawmaterial')->with('success', true)->with('message','This rawmaterial was succesfully deleted');  
               
                
                 
            }
            
        }*/
        
        $using = DB::table('rawmaterials')->where('id', '=', $id)->pluck('using');
        foreach ($using as $use){
        if ($use == 0){
            
            DB::statement('SET FOREIGN_KEY_CHECKS = 0');
            Rawmaterial::destroy($id);
            DB::statement('SET FOREIGN_KEY_CHECKS = 1');

            $userid = Auth::id();
            DB::table('histories')->insert(
            array('action' => 'remove', 'silonr' => "", 'block' => "" , 'quality' => "", 'rawmaterial' => $id , 'sector' => 'rawmaterial', 'user_id' => $userid, 'updated_at' => date("Y-m-d H:i:s"))
                );
            
            return redirect('/rawmaterial')->with('success', true)->with('message','This rawmaterial was succesfully deleted'); 
            
        }else
        {
            return redirect('/rawmaterial')->with('success', true)->with('message','You can not delete while using');   
        }
        }
    }
    
    public function edit($id)
    {
        $type = Input::get('textType');
        $stock = Input::get('textStock');
        $orderd = Input::get('textOrderd');
        $deliverd = Input::get('textDeliverd');
        $using = Input::get('checkUsing');
        
        
        \App\Rawmaterial::where('id', '=', $id)->update(array('type' => $type, 'stock' => $stock, 'orderd' => $orderd, 'deliverd' => $deliverd, 'using' => $using));
        
        $userid = Auth::id();
        DB::table('histories')->insert(
            array('action' => 'edit', 'silonr' => "", 'block' => "" , 'quality' => "", 'rawmaterial' => $type , 'sector' => 'rawmaterial', 'user_id' => $userid, 'updated_at' => date("Y-m-d H:i:s"))
        );

        return redirect('rawmaterial');
    }

    public function editShow($id)
    {
        $rawmatarials = \App\Rawmaterial::where('id', '=', $id)->get();

        $data['rawmaterials'] = $rawmatarials;

        return view('rawmaterial.edit', $data);
    }
    
    public function stockShow()
    {
        $rawmaterial = \App\Rawmaterial::all();
        $data['rawmaterial'] = $rawmaterial;
        return view('rawmaterial.stock', $data);
    }

    public function updatePhoto(Request $request, $id){

        if($request->hasFile('icon')){
            $icon = $request->file('icon');
            $filename = time() . '.' . $icon->getClientOriginalExtension();
            Image::make($icon)->resize(150, 150)->save( public_path('/uploads/rawmaterialicons/' . $filename ) );

            $rawmaterial= \App\Rawmaterial::find($id);
            $rawmaterial->icon=$filename;
            $rawmaterial->save();

            
        }
        return redirect('rawmaterial')->with('message', 'Photo succesfully changed.');

    }
    

}
