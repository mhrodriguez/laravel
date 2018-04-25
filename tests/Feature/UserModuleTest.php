<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //PRUEBA NO. 1: Revisar que funcione correctamente la URL /usuarios y de ser asi que muestre un estatus de 200

    ///////////////////////////////////////////////////////////////////////
    //Nota: Este es el codigo que esta en web.php para verificar la URL:
    //Ruta con función anonima
    //Route::get('/usuarios', function () {
        //return 'Usuarios';
    //});

    // eliminar "public" y dejar solamente function
    function test_si_carga_url_usuarios()
    {

        $this->get('/usuarios')
            //Si esta correcta muestra el estatus 200
            ->assertStatus(200)
            //si esta correcta la prueba seberá mostrar el texto 'usuarios' ya que es el que esta en la URL /usuarios
            // (esto se comprobar en la url del archivo web.php
            ->assertSee('Usuarios')

            // UTILIZANDO VISTAS, REVISAR QUE SE CARGUEN LOS DATOS 'Mario' y 'Pedro':
            ->assertSee('Mario')
            ->assertSee('Pedro');

    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //PRUEBA No. 2: Crear nuevo método para revisión de pruebas de la URL que muestra el detalle de crear nuevo usuario
    // ///////////////////////////////////////////////////////////////////////
    //Nota: Este es el codigo que esta en web.php para verificar la creación del nuevo usuario:
    //Route::get('/usuarios/nuevo', function (){
        //return "Crear nuevo usuario";
    //}) ;


    function test_mostrar_detalle_nuevo_usuario()
    {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

}
