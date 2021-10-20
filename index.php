<?php

require_once "controller/Controlador.php";

ob_start();

$plantilla = new Controlador();
$plantilla->ctrPlantilla();

?>