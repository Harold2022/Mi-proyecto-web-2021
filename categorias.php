<?php

# incluir el modelo
require_once 'models/categorias_model.php';

# definir el nombre de la pagina
$pagina = "categorias";

$nombre = $_GET['nombre'] ?? "";

$resultado = obtenerCategorias($conexion);
# cuando el usuario haga click en el boton Buscar
if (isset($_GET['buscar'])) {

 $nombre = $_GET['nombre'] ?? "";

 $resultado = obtenerCategoriasPorNombre($conexion, $nombre);
}
# incluir la vista
require_once 'views/categorias_view.php';