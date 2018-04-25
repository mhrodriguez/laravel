<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de ususarios</title>
</head>

<body>
</body>
    <!-- Título estático-->
    <!--h1> Usuarios</h1-->


<!-- Título dinámico [pasando 2 variables ($users y $title) del controlador UserController a la vista users.php]-->
    <h1><?php echo e($title) ?></h1>

    <!--En php podemos sustiruir el "echo" por una sintaxis mas corta:
     Se cambia </*?php echo  por  </*?=  */


     -->


    <!-- mostrando datos de $users del controlador UserController-->
    <!-- Utilizando un ciclo de php-->

    <ul>
        <?php foreach ($users as $user): ?>
            <!--La sigiuente linea no utiliza helper "e", es decir no tiene seguridad y se puede incrstar en el-->
            <!--controlador código mal intensionado.-->
            <!--li--> <?php //echo $user ?><!--/li-->


            <!--PARA EVITAR LA INSERSIÓN DE CÓDIGO MAL INTENSIONADO UTILIZANDO EL HELPER "e"
            -Laravel nos ofrece para evitar la inserción de código mal intensionado:-->
            <li> <?php echo e($user) ?></li>

        <?php endforeach; ?>
    </ul>
</html>