<?php 

    $user = 'root';
    $pass = 'root';
    $dbname = 'crud';
    $host = 'localhost';

    try {

        $bd = new PDO('mysql:host='.$host.';
        dbname='.$dbname,
        $user,
        $pass);

    } catch (Excepcion $e) {
        echo "Error de Conexion ".$e->getMessage();
    }


?>
