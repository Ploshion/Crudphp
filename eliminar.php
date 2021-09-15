<?php

if(!isset($_GET['id'])){
    header('Location: index.php');
};


$codigo = $_GET['id'];

include 'conexion.php';

$sentencia = $bd->prepare("DELETE FROM objetos WHERE id= ?;");
$resultado = $sentencia->execute([$codigo]);


if($resultado == TRUE){
    header('location: index.php');
} else {
    echo "Error";
}