<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResolucionController extends Controller
{
    public function resol(Request $request)
    {
      return view('resolucion/resolucion');
    }
    public function nuevor(Request $request)
    {
      return view('resolucion/nuevoresolucion');
    }
    public function edit(Request $request)
    {
      return view('resolucion/editarresolucion');
    }
}
