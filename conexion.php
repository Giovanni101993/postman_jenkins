<?php

    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "formulario_api";
    $conexion = mysqli_connect($server, $user, $pass, $db);

if(!$conexion){

    echo 'Error al conectar';
}

?>