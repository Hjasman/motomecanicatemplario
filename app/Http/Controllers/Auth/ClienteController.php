<?php

namespace App\Http\Controllers;
use app\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function mclientes()
    {
       // $client=Cliente::all();
        return "aqui se pondran los clientes";
    }   
}

