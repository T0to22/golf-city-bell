<?php

class ConexionDB{

    // static public function conectar(){

    //     $host = 'sql254.main-hosting.eu';
    //     $puerto = '3306';
    //     $usuario = 'u455875370_utn_php';
    //     $clave = 'utnPHPavan2022';
    //     $base = 'u455875370_rambo_marcelo';

    //     $conexion = new mysqli($host, $usuario, $clave, $base, $puerto);

    //     if ($conexion->connect_error) {
    //         die("ERROR: " . $conexion->connect_error);
    //     }

    //     return $conexion;
       
    // }

    static public function conectarLocal(){

        $host = 'localhost';
        $puerto = '3306';
        $usuario = 'root';
        $clave = 'toto22';
        $base = 'php_avanzado';

        // $conexion = new mysqli($host, $usuario, $clave, $base, $puerto);
        $conexion = new mysqli($host, $usuario, $clave, $base);


        if ($conexion->connect_error) {
            die("ERROR: " . $conexion->connect_error);
        }

        return $conexion;
       
    }

}