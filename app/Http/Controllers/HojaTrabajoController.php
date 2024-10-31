<?php

namespace App\Http\Controllers;

use App\Models\hoja_de_trabajo;
use App\Models\Cliente;
use App\Models\hoja_de_trabajos;
use App\Models\vehiculo;
use App\Models\productos;
use App\Models\servicios;
use App\Models\servicio_real;
use App\Models\prod_util;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class HojaTrabajoController extends Controller
{
    public function principalh()
    {
        //return $clientem;
       return view('hojatrabajo/hojatrabajo' );
    }
    public function news()
    {
        return view('hojatrabajo/hojatrabajo_new');
    }
    public function saveh(Request $request)
    {
        $servicio = new hoja_de_trabajos(); 
        $servicio->nombre_serv= $request->nombres; 
        $servicio->descripcion_serv= $request->descrs; 
        $servicio->precio_serv= $request->precios; 
        //return $request->all();
        $servicio->save();
        return redirect()->route('hojatrabajo/principalh')->with('saved','oky');
    }
    public function editarh($serv)
    { 
        $servicio_actual=hoja_de_trabajos::find($serv);  
        return view('hojatrabajo/hojatrabajo_ed', compact('servicio_actual'));
    }
    public function updateh(Request $request, $servicio_actual)
    {
       $servicio_up=hoja_de_trabajos::find($servicio_actual);
       $servicio_up->nombre_serv= $request->nombres; 
       $servicio_up->descripcion_serv= $request->descrs; 
       $servicio_up->precio_serv= $request->precios; 
       $servicio_up->save();
        //return $request;
        //return $servicio_up;
        return redirect()->route('hojatrabajo.mostrarh' , $servicio_up)->with('actual','okk');
    }
    public function deleteh($serv)
    {   
        $note = hoja_de_trabajos::findOrFail($serv);
        $note->delete();
        return redirect()->route('hojatrabajo.principalh')->with('eliminar','ok');
        //return "llego aqui. $vehisss";
        //return redirect()->route('vehiculo.principalv');
    }
    public function mostrarh($serv)
    {
        $servicio_actual=hoja_de_trabajos::find($serv);  
        return view('hojatrabajo/hojatrabajo_mst', compact('servicio_actual'));
        
    }
}
