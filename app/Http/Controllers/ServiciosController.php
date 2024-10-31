<?php

namespace App\Http\Controllers;

use App\Models\servicios;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function principals()
    {
        $servicio=servicios::all();
        //return $clientem;
       return view('servicios/servicios',compact('servicio'));
    }
    public function news()
    {
        return view('servicios/servicios_new');
    }
    public function saves(Request $request)
    {
        $servicio = new servicios(); 
        $servicio->nombre_serv= $request->nombres; 
        $servicio->descripcion_serv= $request->descrs; 
        $servicio->precio_serv= $request->precios; 
        //return $request->all();
        $servicio->save();
        return redirect()->route('servicios.principals')->with('saved','oky');
    }
    public function editars($serv)
    { 
        $servicio_actual=servicios::find($serv);  
        return view('servicios/servicios_ed', compact('servicio_actual'));
    }
    public function updates(Request $request, $servicio_actual)
    {
       $servicio_up=servicios::find($servicio_actual);
       $servicio_up->nombre_serv= $request->nombres; 
       $servicio_up->descripcion_serv= $request->descrs; 
       $servicio_up->precio_serv= $request->precios; 
       $servicio_up->save();
        //return $request;
        //return $servicio_up;
        return redirect()->route('servicios.mostrars' , $servicio_up)->with('actual','okk');
    }
    public function deletes($serv)
    {   
        $note = servicios::findOrFail($serv);
        $note->delete();
        return redirect()->route('servicios.principals')->with('eliminar','ok');
        //return "llego aqui. $vehisss";
        //return redirect()->route('vehiculo.principalv');
    }
    public function mostrars($serv)
    {
        $servicio_actual=servicios::find($serv);  
        return view('servicios/servicios_mst', compact('servicio_actual'));
        
    }
}
