<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Registro;

class RegistroController extends Controller
{
    //
    public function create(){
       return view('PDF/index');
    }

    public function Insertar(Request $request){
        //dd($request);
        try {
           DB::beginTransaction();
       $reg = new Registro();
       $reg->nombre=$request->get('nombre');
       $reg->nivel=$request->get('nivel');
       $reg->entidad_formadora=$request->get('entidad_formadora');
       if($request->hasFile('pdf')){
       $archivo=$request->file('pdf');
       $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
       $reg->documento=$archivo->getClientOriginalName();
       }
       $reg->save();
       DB::commit();
        } catch (Exception $e) {
           DB::rollback();
        }
        return redirect()->route('datos.index', $reg);
   }
   
}
