<?php

class Modelo{

    public static function her_insert($tabla,$datos){
        $conexion=new Conexion();
        $con=$conexion->conectar();
		$consulta=mysqli_query($con,"INSERT INTO $tabla VALUES($datos)");
        return $consulta;
	}

    public static function her_select($tabla,$condicion){
		$conexion=new Conexion();
        $con=$conexion->conectar();
    	$consulta=mysqli_query($con,"SELECT * FROM $tabla WHERE $condicion");
    	return $consulta;
	}

    public static function her_delete($tabla,$condicion){
		$conexion=new Conexion();
        $con=$conexion->conectar();
		$consulta=mysqli_query($con,"DELETE FROM $tabla WHERE $condicion");
        return $consulta;
	}

    public static function her_update($tabla,$datos,$condicion){
		$conexion=new Conexion();
        $con=$conexion->conectar();
		$consulta=mysqli_query($con,"UPDATE $tabla SET $datos WHERE $condicion");
		return $consulta;
	}

}

?>