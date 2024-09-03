<?php

class ListadoModelo
{

    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function getCanguros()
    {
        // cargar las BBDD
        require_once("./lib/GestorBD.php");
        $gbd= new GestorBD();
        if ($gbd->conectar())
        {
            // echo "<br /> Conexion correcta";
            $data= $gbd->getCanguros();
            
        }
        else{
            // echo "ERROR Conexion ";
        }

        return $data;
        
    }

    // public function getListadoPastillas($codigo)
    // {
    //     require_once("./lib/GestorBD.php");
    //     $gbd= new GestorBD();

    //     if ($gbd->conectar())
    //     {
    //         //Me he conectado bien

    //         $data= $gbd->getPastillas($codigo);


    //     }
    //     else
    //     {
    //         $data["errno"]=true;
    //     }



    // }


}