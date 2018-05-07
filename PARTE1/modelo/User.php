<?php
class User {
    var $id;
    var $nombre;
    var $curso;
    var $edad;
    function User($nombre,$curso,$edad){
        $this->nombre=$nombre;
        $this->curso=$curso;
        $this->edad=$edad;
    }
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set the value of id
     */ 
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * Set the value of nombre
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    /**
     * Get the value of curso
     */ 
    public function getCurso()
    {
        return $this->curso;
    }
    /**
     * Set the value of curso
     *
     *
     */ 
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }
    /**
     * Get the value of edad
     */ 
    public function getEdad()
    {
        return $this->edad;
    }
    /**
     * Set the value of id
     */ 
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
}
?>
