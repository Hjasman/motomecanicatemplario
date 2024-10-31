<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function principalp()
    {
        $producto=productos::all();
        //return $clientem;
       return view('productos/productos',compact('producto'));
    }
    public function newp()
    {
        return view('productos/productos_new');
    }
    public function savep(Request $request)
    {
        $producto = new productos(); 
        $producto->nombre_prod = $request->nombrep; 
        $producto->marca_prod = $request->appatp; 
        $producto->descripcion_prod = $request->descrp; 
        $producto->precio_prod = $request->preciop; 
        //return $request->all();
        $producto->save();
        return redirect()->route('productos.principalp')->with('saved','oky');
    }
    public function editarp($prod)
    { 
        $producto_actual=productos::find($prod);  
        return view('productos/productos_ed', compact('producto_actual'));
    }
    public function updatep(Request $request, $producto_actual)
    {
        $producto_up=productos::find($producto_actual);
        $producto_up->nombre_prod = $request->nombrep; 
        $producto_up->marca_prod = $request->appatp; 
        $producto_up->descripcion_prod = $request->descrp; 
        $producto_up->precio_prod = $request->preciop; 
        $producto_up->save();
        //return $request;
        //return $vehiculo_up;
        return redirect()->route('productos.mostarp' , $producto_up)->with('actual','okk');
    }
    public function deletep($prod)
    {   
        $note = productos::findOrFail($prod);
        $note->delete();
        return redirect()->route('productos.principalp')->with('eliminar','ok');
        //return "llego aqui. $vehisss";
        //return redirect()->route('vehiculo.principalv');
    }
    public function mostrarp($prod)
    {
        $producto_actual=productos::find($prod);  
        return view('productos/productos_mst', compact('producto_actual'));
        
    }
}
