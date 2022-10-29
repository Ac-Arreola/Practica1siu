<?php

namespace App\Http\Controllers;
class ControladorLogin extends Controller

use Illuminate\Http\Request;

class ValidarLogin extends Controller
{
    public function procesarLogeo(ValidarLogin $req){

        return redirect('Agregar')->with('confirmacion','Procesado correctamente');
     }

}
