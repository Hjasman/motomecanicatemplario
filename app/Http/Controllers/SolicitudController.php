<?php

namespace App\Http\Controllers;

use App\Models\solicitudes;
use App\Models\Cliente;
use App\Models\solicitud;
use App\Models\vehiculo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolicitudController extends Controller
{
    public function principalsl()
    {
       // $solicitud=solicitudes::all();
        //return $clientem; ,compact('solicitud')
       return view('solicitud/solicitud');
    }
    public function buscarcli(Request $request)
    { $nose="okk";
      $cliente_q = DB::table('clientes')
                  ->select('*')
                  ->where('celular_cl','=',$request->cel)
                  ->first();
                  
        if(!isset($cliente_q))
        {
          return redirect()->route ('solicitud.principalsl')->with('actuali','ok');
        }
        else
        {
         return view('solicitud/solicitud2',compact('cliente_q'));
        }
      }
    public function solicitud22()
    {
     return view('solicitud.solicitud2');
    }
    public function solicitud3(Request $request)
    {
     return view('solicitud.solicitud3');
    }
    public function buscarveh(Request $request, $cliente_q)
    {
      $vehiculo_q = DB::table('vehiculos')
                  ->select('*')
                  ->where('nroplaca_v','=',$request->placa)
                  ->first();
       // return $cliente_q;
        $clienteqq=Cliente::find($cliente_q);
                 return view('solicitud.solicitud3',['vehiculo_q'=>$vehiculo_q,'clienteqq'=>$clienteqq]); 
    }
    public function mostrar()
    {
      return view('solicitud/solicitud_mst');
    }
    public function llenasol()
    {
     //$now=Carbon::now();
     //$newsolicitud = new solicitudes();
     //$newsolicitud->id_cliente = $clienteqq->id; 
     //$newsolicitud->id_vehiculo  = $vehiculo_q->id; 
     //$newsolicitud->fecha_soli = $now;
      //return $request->all();
     //$newsolicitud->save(); 
     //return $vehiculo_q;
    return view('solicitud.llenasolicitud',[37,11]);
    }
    public function mostrarvehi(Request $request)
    {
      
    }
    
    public function resol()
    {
      return view('resolucion.resolucion');
    }



}
