<?php

# incluir el modelo
require_once 'models/actores_model.php';

# definir el nombre de la pagina
$pagina = "Actores";

$nombre = $_GET['nombre'] ?? "";

$resultado = obtenerActores($conexion);


# cuando el usuario haga click en el boton Buscar
if (isset($_GET['buscar'])) {

 $nombre = $_GET['nombre'] ?? "";

 $resultado = obtenerActoresPorNombre($conexion, $nombre);
}


if (isset($_POST['guardar'])) {
   $nombre = $_POST['nombre'] ?? "";
   $apellido = $_POST['apellido'] ?? "";
   $datos = compact('nombre', 'apellido');

   $insertado = insertarActor($conexion, $datos);

   if ($insertado) {
       $_SESSION['mensaje'] = 'Datos insertados correctamente';
   } else {
    $_SESSION['mensaje'] = 'Datos no insertados';
   }
   
   #prevenir reenvio del formulario
}

# incluir la vista
require_once 'views/actores_view.php';