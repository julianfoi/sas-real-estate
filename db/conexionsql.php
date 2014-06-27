<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexionsql
 *
 * @author Estudiante
 */
class conexionsql {
    //put your code here
    private $servidor;
    private $user;
    private $password;
    private $basedatos;//cursophp
    private $conexion;
    
    public function setbasedatos($db)
     {
        $this->basedatos=$db;
        
     }
     
    public function getbasedatos()
     {
        return $this->basedatos;
        
     }     
    
    public function __construct($_servidor,$_user,$_password)
    {
        $this->servidor=$_servidor;//loalhost
        $this->user=$_user;//root
        $this->password=$_password;//no hay
        
    }
    
    public function conectar()
    {
        $this->conexion=mysql_connect($this->servidor,$this->user,$this->password)or die("No hay conexion con el servidor");
    
        mysql_select_db($this->basedatos,$this->conexion) or die ("No hay conexion con la base de datos");
              
    }
    
    public function cerrarconexion()
    {
        mysql_close($this->conexion);
    }
    
    
    
    
    
        
    
    
    
    
    
    
    
}

?>
