<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeleccionarController extends Controller
{
    public function index(){
        return view('modulos.seleccionar');
    }
}
