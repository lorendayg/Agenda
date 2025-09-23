<?php
    class Conexion {
        // servidor (localhost), usuario, password, base son los 4 elementos minimos para hacer una conexion 
        public function conectar(){
            $host = "localhost";
            $usuario = "root";
            $password = "";
            $base = "agenda2";
            $conexion = mysqli_connect(
                $host, $usuario, $password, $base
            );
            return $conexion;
        }
    }
// new - reserva memoria 
    $obj = new Conexion();
    if($obj->conectar()){
        /* echo "funciona speect"; */
    }else {
        echo "no funciona";
    }

    // para mandar a llamar un metodo en php se usa una flecha ->

?>