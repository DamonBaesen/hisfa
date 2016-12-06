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
        
        DB::table('rawmaterials')
            ->join('primesilos', 'rawmaterials.id', '=', 'primesilos.rawmaterial_id')
            ->where('rawmaterials.id', '!=', 'primesilos.rawmaterial_id')
            ->update(array('using' => 0))
            ;
        
        DB::table('rawmaterials')
            ->join('primesilos', 'rawmaterials.id', '=', 'primesilos.rawmaterial_id')
            ->whereRaw('rawmaterials.id = primesilos.rawmaterial_id')
            ->update(array('using' => 1))
            ;
        
        return view('rawmaterial.index', $data);
    }

    public function add()
    {
        $exist = false;
        $type = Input::get('textType');
        $stock = Input::get('textStock');
        $orderd = Input::get('textOrderd');
        $deliverd = Input::get('textDeliverd');


        $rawmaterial = \App\Rawmaterial::all();

        foreach($rawmaterial as $raw)
        {
            if($raw->type = $type)
            {
                $exist = true;
            }
        }


        if($exist == false) {
            DB::table('rawmaterials')->insertGetId(
                array('type' => $type, 'stock' => $stock, 'orderd' => $orderd, 'deliverd' => $deliverd, 'using' => 0)
            );

            $userid = Auth::id();
            DB::table('histories')->insert(
                array('action' => 'add', 'silonr' => "", 'block' => "", 'quality' => "", 'rawmaterial' => $type, 'sector' => 'rawmaterial', 'user_id' => $userid, 'updated_at' => date("Y-m-d H:i:s"))
            );
        }
        return redirect('rawmaterial');
    }
    
    public function addShow()
    {
        return view('rawmaterial.add');
    }

    public function remove($id)
    {
        //get using value
        $using = DB::table('rawmaterials')->where('id', '=', $id)->pluck('using');
        
        foreach ($using as $use){
        
        //als de grondstof niet gebruikt kan deze verwijderd worden
        if ($use == 0){
            //verwijderen van grondstof
            //error foreign-key oplossing
            DB::statement('SET FOREIGN_KEY_CHECKS = 0');
            Rawmaterial::destroy($id);
            DB::statement('SET FOREIGN_KEY_CHECKS = 1');

            $userid = Auth::id();
            DB::table('histories')->insert(
            array('action' => 'remove', 'silonr' => "", 'block' => "" , 'quality' => "", 'rawmaterial' => $id , 'sector' => 'rawmaterial', 'user_id' => $userid, 'updated_at' => date("Y-m-d H:i:s"))
                );
            //geef een succes boodschap mee
            return redirect('/rawmaterial')->with('success', true)->with('message','This rawmaterial was succesfully deleted'); 
            
        }
            else
        {
            //geef een boodschap mee dat een grondstof die gerbuikt wordt in een silo niet verwijderd kan worden
            return redirect('/rawmaterial')->with('success', true)->with('message','You can not delete while using');   
        }
        }
    }
    
    public function edit($id, Request $request)
    {
        $type = Input::get('textType');
        $stock = Input::get('textStock');
        $orderd = Input::get('textOrderd');
        $deliverd = Input::get('textDeliverd');
        $using = Input::get('textUsing');

        if($using == true) {
            $using = 1;
        }
        else
        {
            $using = 0;
        }
        
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
