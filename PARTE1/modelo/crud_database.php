<?php
    class crud_database {
        var $conector;
        function crud_database($conector){
            $this->conector=$conector;
        }//constructor
        function getAllUsers(){
            $allUser = $this->conector->query("SELECT * FROM juego");
            return $allUser;
        }
        function insertUser($user){
            $consultainsert="INSERT INTO juego (nombre,curso,edad) values ('".$user->getNombre()."','".$user->getCurso()."','".$user->getEdad()."')";
            $insert = $this->conector->query($consultainsert);
            $resultado = $this->getAllUsers();
            return $resultado;
        }
    }
?>