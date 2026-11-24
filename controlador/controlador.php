<?php

class Controlador {

    public static function inicio() {
        $vista = "vistas/home.php";
        include("vistas/plantilla.php");
    }

    public static function nosotros() {
        $vista = "vistas/nosotros.php";
        include("vistas/plantilla.php");
    }

    public static function servicios() {
        $vista = "vistas/servicios.php";
        include("vistas/plantilla.php");
    }

    public static function programas() {
        $vista = "vistas/programas.php";
        include("vistas/plantilla.php");
    }

    public static function instalaciones() {
        $vista = "vistas/instalaciones.php";
        include("vistas/plantilla.php");
    }

    public static function personal() {
        $vista = "vistas/personal.php";
        include("vistas/plantilla.php");
    }
}
?>