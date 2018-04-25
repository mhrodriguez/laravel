<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*   Cuando un usuario hace una petición HTTP, Laravel busca en los archivos de rutas una definición que coincida
con el patrón de la URL según el método HTTP usado y en la primera coincidencia le muestra el resultado al usuario.
Por tanto el orden de precedencia de las definiciones de rutas es muy importante.


Para solucionar los posibles conflictos con el parecido en la URL de distintas rutas puedes hacerlo de 2 maneras:

1- Usando el método where para agregar condiciones de expresiones regulares a la ruta.

2- Ordenando las rutas de tal manera que las más específicas estén al principio y las más generales al final del
archivo de rutas.


*/



///////--------->     RUTAS CON CADENAS DE TEXTO, NO CON VISTAS - BEGIN     <---------///////

Route::get('/', function () {
    return view('welcome');
});






//Ruta no. 1:
///////////////////////////////////////////////////
//Ruta con función anonima (usando RUTAS)
/*Route::get('/usuarios', function () {
    return 'Usuarios';

});*/
///////////////////////////////////////////////////
/// Controlador 1:
////////////////////////////////////////////////////////////////////////////////////////
// Invocar controlador UserController con el método index en lugar de la función anónima de "/usuarios"
Route::get('/usuarios', 'UserController@index');
////////////////////////////////////////////////////////////////////////////////////////







//Ruta con función anonima
Route::get('/mario', function () {
    return 'Hola Mario';
});











//Ruta no. 2:
///////////////////////////////////////////
//Rutas con parametros dinámico: {$id}    -    (validado WHERE)
//usuarios/nuevo != usuarios [0-9]+ (Usuarios id debe ser numerico y eso se define en el where)
/*Route::get('/usuarios/{id}', function ($id) {
    return "------ >  Detalles del usuario: {$id}";
})->where('id', '[0-9]+');*/


///////////////////////////////////////////
/// Controlador no. 2:
///////////////////////////////////////////////////////////////////////////////////////////////////////
//Invocar el controlador USerController con el método show en lugar de la ruta con parámetros dinámico
Route::get('/usuarios/{id}', 'UserConntroller@show')
    ->where('id', '[0-9]+');
///////////////////////////////////////////////////////////////////////////////////////////////////////









//Ruta no. 3:
///////////////////////////////////////////
//Rutas con parametros nuevo usuario
/*Route::get('/usuarios/nuevo', function (){
    return "Crear nuevo usuario";
}) ;*/
///////////////////////////////////////////
/// Controlador no. 3:
//////////////////////////////////////////////////////////////////////////////////////////////////////////
/// //Invocar el controlador USerController con el create en lugar de la ruta con parámetros nuevo usuario


Route::get('/usuarios/nuevo', 'UserController@create') ;
//////////////////////////////////////////////////////////////////////////////////////////////////////////














//Rutas con parámetros
Route::get('posts/{post_id}/comments/{comment_id}', function ($postId, $commentId) {
    return "Este el comentario {$commentId} del post {$postId}";
});








//Ruta y controlador no. 3
//////////////////////////////////////////////////////////////////////////////////////
//Rutas con parámetros opcionales
//función con parametros: name y nickname
    /*Route::get('saludo/{name}/{nickname?}', function ($name, $nickname = null) {
        //Poner la primera letra en mayúsculas
        $name = ucfirst($name);
        //Valindando si un usuario no tiene apodo
        if ($nickname) {
            return "Bienvenido {$name}, tu apodo es {$nickname}";
        } else {
            return "Bienvenido {$name}";
        }
    });*/
//////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////
//Controllador WelcomeUserController método index
Route::get('saludo/{name}/{nickname?}','WelcomeUserController@create');

//////////////////////////////////////////////////////////////////////////////////////












///////--------->     RUTAS CON CADENAS DE TEXTO, NO CON VISTAS - END  <---------///////
///
///
///.-------------> CONTROLLERS - BEGIND  <-------/////
///
//Se creò el controlador llamado UserControler el cual tiene los return que originlente trabajamos con las rutas de
//cadenas de texto, en UserController existen los Métodos:
//1. home
//2.- index
//3.- show
//4.- create
//Los cual tiene los return

/*
// Invoca al controlador: UserController
Route::get('/', 'UserController@home');

Route::get('/usuarios', 'UserController@index');

Route::get('/usuarios/{id}','UserController@show')
    ->where('id', '[0-9]+');

Route::get('/usuarios/nuevo','UserController@create');


//Invoca al controlador: WelcomeUserController
Route::get('saludo/{name}/{nickname?}','WelcomeUserController@index');
*/








