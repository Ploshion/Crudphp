<?php

print_r($_POST);

include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['txtnombre'];
$descripcion = $_POST['txtdescripcion'];
$nota = $_POST['txtnota'];

$sentencia = $bd->prepare("UPDATE objetos SET nombre = ?, descripcion = ?, nota = ? WHERE id = ?;");
$resultado = $sentencia->execute([$nombre,$descripcion,$nota, $id]);

if($resultado == TRUE){
    header('location: index.php');
} else {
    echo "Error";
}