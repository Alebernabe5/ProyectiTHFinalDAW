<?php

class InicioModelo
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    } 
    
    public function validar($email, $contrasena)
    {
         // cargar las BBDD
         require_once("./lib/GestorBD.php");
         $gbd= new GestorBD();
         if ($gbd->conectar())
         {
            //  echo "<br /> Conexion correcta";
             $data= $gbd->validar($email, $contrasena);
             return $data;
             
         }
         else{
             echo "ERROR Conexion ";
         }
 
         return $data;
    }
}