<?php

# incluir el modelo
require_once 'models/Idiomas_model.php';

# definir el nombre de la pagina
$pagina = "Idiomas";

$nombre = $_GET['nombre'] ?? "";

$resultado = obtenerIdiomas($conexion);

# cuando el usuario haga click en el boton Buscar
if (isset($_GET['buscar'])) {

 $nombre = $_GET['nombre'] ?? "";

 $resultado = obtenerIdiomasPorNombre($conexion, $nombre);
}
# incluir la vista
require_once 'views/Idiomas_view.php';