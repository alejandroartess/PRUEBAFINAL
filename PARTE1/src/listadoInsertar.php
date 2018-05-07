<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color:#EEE8AA;">
  <h1>LISTADO DE USUARIOS</h1>
    <?php
    include '../modelo/conexion.php';
    include '../modelo/crud_database.php';
    include '../modelo/user.php';

        $user = new User($_POST['nombre'],$_POST['curso'],$_POST['edad']);
        $crudDB_object= new crud_database($conector);
        $resultado=$crudDB_object->insertUser($user);
     foreach ($resultado as $fila) {
      echo "<strong>Usuario</strong> ".$fila['id']."<br>"."<strong>Nombre: </strong>".$fila['nombre']."<br>"."<strong>Curso: </strong>".$fila['curso']."<br>"."<strong>Edad: </strong>".$fila['edad']."<br>"."<br>";
      echo "<a href='todo.php?id=".$fila['id']."'> Listado Usuarios</a> <br>";
      }
     ?>
  </body>
</html>