<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;






///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* I. TRABAJANDO CON CONTROLADORES
class UserController extends Controller
{
    //Creación de primer método llamado index
    public function index(){
        return 'Usuarios';

    }

    //Creación del método show (sustituye a la ruta con PARÁMETROS DINÁMICOS)
    public function show($id){
        return "------ >  Detalles del usuario: {$id}";
    }

    //Creación del método create (sustituye a la ruta con PARÁMETROS CREAR NUEVO USUARIO)
    public function create(){
        return "Crear nuevo usuario";
    }
}
*/

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////













//II. TRABAJANDO CON CONTROLADORES Y VISTAS
class UserController extends Controller
{
    //Retornar a la vista users (users.php)
    public function index(){
        //1. Ejecutar la vista: Nombre de la vista RELATIVO dentro de resources/views/users.php
        //return view('users');

        //2. Pasar datos a la vista:

        // a). si se obtendrieran los valores de una BD (para esto se tendía que coniguar un modelo para la
        // comunicación a la BD):

        //$users = User::all();
        //return view('users');

        //b. Utilizando un arreglo estático:

        $users= [
            'Mario',
            'Pedro',
            'Pepe',
            //*****IMPORTANTE: E lugar de poner un nombre de usuario, por ejemplo 'Manuel', si no protegemos
            // el REGISTRO DE USUARIOS pueden inyectar código JavaScript mal intensionado de la siguiente forma:
            '<script> alert("Mensaje de código mal intensionado")</script>',


            //*****IMPORTANTE: Para evitar el ingreso MAL INTENSIONADO de insersión de código JavaScript
            // cuando existiera el REGISTRO DE USUARIOS, PODEMOS BLOQUERLO utilizando un "helper" (e) el cual se
            // implementará en la visata users.php



        ];
        //////////////////////////////////////////////////////////////////////////////////////////////////////
        //Pasar datos a la vista users.php UILIZANDO 1 VARIABLE, pasar las variables en un arreglo asociativo:
        //return view('users', [
        //    'users'=> $users

        //]);
        //////////////////////////////////////////////////////////////////////////////////////////////////////





//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //Pasar datos a la vista users.php UILIZANDO 2 VARIABLES, pasar las variables en un arreglo asociativo:
        /*return view('users', [
            'users'=> $users,
            'title'=> "Listado de usuarios"

        ]);*/

        //Otra forma de pasar datos del controlador a la vista utilizando el método "with":
        /*
        a).

        return view('users')->with([
            'users'=> $users,
            'title'=> "Listado de usuarios"

        ]);*/



        /* b).

        return view('users')
            ->with('users',$users)
            ->with('title', "Listado de usuarios");*/


        //SI SE DESEA DEJAR EL TÍTULO DINÁMICO:
        $title='Listado de usuarios';

        /* return view('users')
            ->with('users',$users)
            ->with('title', $title);*/


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        /* para comprobar se puede utilizar el helper de laravel "dd":
        dd(compact('title','users'));

         similar a utilizar var_dump:
        var_dump(compact('title','users')); die(); */


        //SE puede utilizar la funcion de PHP "compact" que acepta como argumentos el nombre de las variables:
        //users y title y los convierte en un array asociativo:
        return view('users',compact('title','users'));
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    }


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    //Creación del método show (sustituye a la ruta con PARÁMETROS DINÁMICOS)
    public function show($id){
        return "------ >  Detalles del usuario: {$id}";
    }

    //Creación del método create (sustituye a la ruta con PARÁMETROS CREAR NUEVO USUARIO)
    public function create(){
        return "Crear nuevo usuario";
    }
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////