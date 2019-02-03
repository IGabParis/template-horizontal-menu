<?php

class Conectar {
	function con(){
		
                $host='localhost';
                $usuario='root';
                $clave='';
                $base_datos='tah';
                
                $conexion=mysqli_connect($host, $usuario, $clave, $base_datos);
                return $conexion;
	}
}

?>