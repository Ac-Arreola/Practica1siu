<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidarLogs;

class ControladorLogin extends Controller
{
    public function procesarLogeo(ValidarLogs $req){
//SE REDIRECCIONA A VISTA AGREGAR CON CONFIRMACION Y MSJ DE CORRECTO
        return redirect('Agregar')->with('confirmacion','Procesado correctamente');
        
     }

}
