<?php

# incluir el modelo
require_once 'models/paises_model.php';

# definir el nombre de la pagina
$pagina = "language";

$nombre = $_GET['nombre'] ?? "";

$resultado = obtenerPaises($conexion);
# cuando el usuario haga click en el boton Buscar
if (isset($_GET['buscar'])) {

 $nombre = $_GET['nombre'] ?? "";

 $resultado = obtenerpaisesPorNombre($conexion, $nombre);
}
# incluir la vista
require_once 'views/paises_view.php';