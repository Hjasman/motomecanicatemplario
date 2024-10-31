<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CRMController extends Controller
{
    public function crmprinc()
    {
       // $solicitud=solicitudes::all();
        //return $clientem; ,compact('solicitud')
       return view('crm/crmprincipal');
    }
    public function crmcita()
    {
       // $solicitud=solicitudes::all();
        //return $clientem; ,compact('solicitud')
       return view('crm/crmcitas');
    }
    public function crmllamada()
    {
       return view('crm/crmllamadas');
    }
    public function crmsatisfac()
    {
       return view('crm/crmsatisfaccion');
    }
    public function crmwatt()
    {
       return view('crm/crmwhatts');
    }
    public function crmestadistic()
    {
       return view('crm/crmestadistica');
    }
}
