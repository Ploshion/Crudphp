<?php

include 'conexion.php';

           $nombre = $_POST['txtnombre'];
           $descripcion = $_POST['txtdescripcion'];
           $nota = $_POST['txtnota'];

           $sentencia = $bd->prepare("INSERT INTO objetos(nombre,descripcion,nota) VALUES (?,?,?);");
           $resultado = $sentencia->execute([$nombre, $descripcion,$nota]);

           if($resultado == TRUE){
               header('location: index.php');
           } else {
               echo "Error";
           }

?>