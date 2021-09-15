<?php

    if(!isset($_GET['id'])){
        header('Location: index.php');
    };


    include 'conexion.php';

    $id = $_GET['id'];

    $sentencia = $bd->prepare("SELECT * FROM objetos WHERE id= ?;");
    $sentencia->execute([$id]);
    $objeto = $sentencia->fetch(PDO::FETCH_OBJ);
    print_r($objeto);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Objetos</title>
</head>
<body>
    <h3>Editar</h3>
        <form method="POST" action="editarProceso.php">
            <table>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="txtnombre" value="<?php echo $objeto->nombre; ?>"></td>
                </tr>
                <tr>
                    <td>Descripcion</td>
                    <td><input type="text" name="txtdescripcion" value="<?php echo $objeto->descripcion; ?>"></td>
                </tr>
                <tr>
                    <td>Nota</td>
                    <td><input type="text" name="txtnota" value="<?php echo $objeto->nota; ?>"></td>
                </tr>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $objeto->id; ?>"> </input>
                    <td><input type="submit"  value="Editar"></td>
                </tr>

            </table>

        
        </form>
</body>
</html>