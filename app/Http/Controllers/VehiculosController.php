<?php

namespace App\Http\Controllers;

use App\Models\vehiculo;
use Illuminate\Http\Request;

class VehiculosController extends Controller
{
    public function principalv()
    {
        $vehiculom=vehiculo::all();
        //return $clientem;
       return view('vehiculo/vehiculos',compact('vehiculom'));
    }
    public function newv()
    {
        return view('vehiculo/vehiculo_new');
    }
    public function savev(Request $request)
    {
        $vehiculo = new vehiculo(); 
        $vehiculo->nroplaca_v = $request->placav; 
        $vehiculo->color_v = $request->colorv; 
        $vehiculo->marca_v = $request->marcav; 
        $vehiculo->modelo_v = $request->modelov; 
        $vehiculo->año_v=$request->añov;
        $vehiculo->observaciones_v=$request->obsv;
        
        //return $request->all();
        $vehiculo->save();
        return redirect()->route('clientes.principal')->with('save','okk');
    }
    public function editarv($rueda)
    {
        $vehiculo_actual=vehiculo::find($rueda);  
        return view('vehiculo/vehiculo_ed', compact('rueda','vehiculo_actual'));
    }
    public function updatev(Request $request, $vehiculo_actual)
    {
        $vehiculo_up=vehiculo::find($vehiculo_actual);
        $vehiculo_up->nroplaca_v = $request->placav; 
        $vehiculo_up->color_v = $request->colorv; 
        $vehiculo_up->marca_v = $request->marcav; 
        $vehiculo_up->modelo_v = $request->modelov; 
        $vehiculo_up->año_v = $request->añov;
        $vehiculo_up->observaciones_v = $request->obsv;
        $vehiculo_up->save();
        //return $request;
        //return $vehiculo_up;
        return redirect()->route('vehiculo.mostarv' , $vehiculo_up)->with('actual','okk');
    }
    public function deletev($vehisss)
    {   
        $note = vehiculo::findOrFail($vehisss);
        $note->delete();
        return redirect()->route('vehiculo.principalv')->with('eliminar','ok');
        //return "llego aqui. $vehisss";
        //return redirect()->route('vehiculo.principalv');
    }
    public function mostrarv($ruedam)
    {
        $vehiculo_actual=vehiculo::find($ruedam);  
        return view('vehiculo/vehiculo_mst', compact('ruedam','vehiculo_actual'));
        
    }
}
