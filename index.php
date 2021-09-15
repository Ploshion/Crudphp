<?php 

include 'conexion.php';

$sentencia = $bd->query("SELECT * FROM objetos;");
$objetos = $sentencia->fetchAll(PDO::FETCH_OBJ);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <div>
        <h3>Lista de Objetos</h3>
        <table >
            <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>descripcion</th>
                    <th>nota</th>
                    
                </tr>

                <?php
                foreach($objetos as $dato){
                    ?>
                 <tr>
                   <td><?php echo $dato-> id;?> </td>
                   <td><?php echo $dato-> nombre;?> </td>
                   <td><?php echo $dato-> descripcion;?> </td>
                   <td><?php echo $dato-> nota;?> </td>
                   <td><a href="editar.php?id=<?php echo $dato->id; ?>">Editar</a></td>
                   <td><a href="eliminar.php?id=<?php echo $dato->id; ?>">Eliminar</td>
                 </tr>
                    <?php
              
                }
                ?>
            </thead>
        </table>

        <div class="ingresar">
            <hr>
                <h3>Ingresar mas objetos</h3>
                <form action="agregar.php" method="POST">
                    <table>
                        <tr>
                            <td>Nombre</td>
                            <td><input type="text" name="txtnombre"></td>
                            </tr>

                            <tr>
                            <td>Descripcion</td>
                            <td><input type="text" name="txtdescripcion"></td>
                            </tr>

                            <tr>
                            <td>Nota</td>
                            <td><input type="text" name="txtnota"></td>
                            </tr>
                            
                        <tr>
                            <td><input type="reset" name="reset"></td>
                            <td><input type="submit" value="INGRESAR" name="enviar"></td>
                        </tr>
                    </table>
                </form>
            </hr>

        </div>
    </div>
</body>
</html>