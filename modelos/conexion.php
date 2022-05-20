<?php

class ConexionDB
{

    static public function conectar()
    {

        $host = 'sql254.main-hosting.eu';
        $puerto = '3306';
        $usuario = 'u455875370_utn_php';
        $clave = 'utnPHPavan2022';
        $base = 'u455875370_rambo_marcelo';

        $link = new PDO("mysql:host=" . $host . ";dbname=" . $base, $usuario, $clave);
        $link->exec('set names utf8');
        return $link;
    }
}
