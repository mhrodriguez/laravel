<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    //crear método index
    public function index($name, $nickname = null){
        //Poner la primera letra en mayúsculas
        $name = ucfirst($name);
        //Valindando si un usuario no tiene apodo
        if ($nickname) {
            return "Bienvenido {$name}, tu apodo es {$nickname}";
        } else {
            return "Bienvenido {$name}";
        }

    }
}
