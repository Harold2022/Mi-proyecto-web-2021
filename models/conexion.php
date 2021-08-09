<?php

# conectarnos a la base de datos
// forma simple
$host = "127.0.0.1";
$usuario = "root";
$contraseña = "";
$base_datos = "sakila";

$conexion = mysqli_connect($host, $usuario, $contraseña, $base_datos);

if (!$conexion) {
    echo "<br>Hubo un error al conectarnos";
}