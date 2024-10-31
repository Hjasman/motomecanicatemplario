<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientessController extends Controller
{
    public function principal()
    {
        $clientem=Cliente::all();
       // return $clientem;
       return view('clientes/clientes',compact('clientem'));
    }
    
    public function newc()
    {
        return view('clientes/clientes_new');
    }
    public function savec(Request $request)
    {
        $cliente= new cliente(); 
        $cliente->nombres_cl = $request->nombrec; 
        $cliente->ap_paterno_cl = $request->appatc; 
        $cliente->ap_Materno_cl = $request->apmatc; 
        $cliente->email_cl = $request->emailc; 
        $cliente->celular_cl = $request->celuc;
        $cliente->observaciones_cl = $request->obsc;
        $cliente->save();
        //return $request;
        //return $clienteup;
        return redirect()->route('clientes.principal')->with('save','okk');
    }
    public function editarc($client)
    {
        $cliente_actual=Cliente::find($client);  
        return view('clientes/clientes_ed', compact('cliente_actual'));
    }
    public function updatec(Request $request, $cliente_actual)
    {
        $clienteup=Cliente::find($cliente_actual);
        $clienteup->nombres_cl = $request->nombrec; 
        $clienteup->ap_paterno_cl = $request->appatc; 
        $clienteup->ap_Materno_cl = $request->apmatc; 
        $clienteup->email_cl = $request->emailc; 
        $clienteup->celular_cl = $request->celuc;
        $clienteup->observaciones_cl = $request->obsc;
        $clienteup->save();
        //return $request;
        //return $clienteup;
        return redirect()->route('clientes.mostarc' , $clienteup)->with('actual','okk');
    }
    public function deletec($clisss)
    {   
        $note = Cliente::findOrFail($clisss);
        $note->delete();
        return redirect()->route('clientes.principal')->with('eliminar','ok');
        //return "llego aqui. $note";
        //return redirect()->route('vehiculo.principalv');
    }
    public function mostrarc($client)
    {
        $cliente_actual=Cliente::find($client);  
        return view('clientes/clientes_mst', compact('cliente_actual'));
        
    }
    
}
