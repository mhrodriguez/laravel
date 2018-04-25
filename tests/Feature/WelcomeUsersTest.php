<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    //Esto dice la URL en web.php
    //Route::get('saludo/{name}/{nickname?}', function ($name, $nickname = null) {
    //    //Poner la primera letra en mayúsculas
    //    $name = ucfirst($name);
    //    //Valindando si un usuario no tiene apodo
    //    if ($nickname) {
    //        return "Bienvenido {$name}, tu apodo es {$nickname}";
    //    } else {
    //    return "Bienvenido {$name}";
    //    }
    //});


    function Welcome_users_with_nickname()
    {
        $this->get(saludo/mario/flecha)
            ->assertStatus(200)
            ->assertSee("Bienvenido mario, tu apodo es flecha");
    }
    function Welcome_users_without_nickname()
    {
        $this->get(saludo/mario)
            ->assertStatus(200)
            ->assertSee("Bienvenido mario");
    }
}
