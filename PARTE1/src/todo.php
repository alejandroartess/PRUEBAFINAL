<?php
  include '../modelo/conexion.php';
  include '../modelo/crud_database.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet"  href="formulario.css">
    <title></title>
  </head>
  <body style="background-color:#EEE8AA;">
  <h1><font color="black">LISTADO USUARIOS</font></h1>
    <a href="insertarUsuario.php">INSERTAR USUARIO</a>
    <?php
    $gestor= new crud_database($conector);
    $resultado = $gestor->getAllUsers();
     foreach ($resultado as $fila) {
        echo "</br>";
        echo "<strong>Usuario</strong> ".$fila['id']."<br>"."<strong>Nombre: </strong>".$fila['nombre']."<br>"."<strong>Curso: </strong>".$fila['curso']."<br>"."<strong>Edad: </strong>".$fila['edad']."<br>"."<br>";
      }
     ?>
  </body>
</html>