<?php
require_once("controlador/controlador.php");

if (isset($_REQUEST["a"])) {
    $metodo = $_REQUEST["a"];
    if (method_exists("Controlador", $metodo)) {
        Controlador::$metodo();
    } else {
        Controlador::inicio();
    }
} else {
    Controlador::inicio();
}
?>