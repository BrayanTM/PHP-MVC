<?php
// El archivo index.php es el punto de entrada de la aplicación MVC. En el mostraremos la salida de las vistas al usuario, y tambien a traves de el enviaresmos las peticiones a los controladores correspondientes.

require_once "controllers/plantillla.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrTraerplantilla();
?>