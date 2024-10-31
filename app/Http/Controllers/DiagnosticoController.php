<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagnosticoController extends Controller
{
    public function llenadiag(Request $request)
    {
      return view('diagnostico.llenadiagnostico');
    }
    public function llenadodiag(Request $request)
    {
      return view('diagnostico/llenadiag2');
    }
    public function editardiag(Request $request)
    {
      return view('diagnostico/editardiag');
    }
    
}
