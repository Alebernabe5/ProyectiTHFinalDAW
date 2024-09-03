<?php

class ListadoControlador
{
    public function __construct(Type $var = null) {
        $this->var = $var;
        
        
    }
    //Acciones que se pueden realizar en la sección de Listado
    
    public function listar()
    {
        // echo "estoy en el controlador de listado y voy alistar";

        //Obtener los datos del modelo
        require_once("./lib/GestorSesiones.php");
        $ses= new GestorSesiones();
            if($ses->existeSesion("CLAVE"));
        {   
            require_once ("./modelos/ListadoModelo.php");
            $modelo= new ListadoModelo();
            $data=$modelo->getCanguros($ses->obtenerValorDeSesion("CLAVE"));
    
    
            //Pasar los datos a la vista
            require_once("./vistas/Vista.php");
            $vista= new Vista();
            $vista->render("listado", $data);

            // con esto creamos la sesion 
            // echo 
            // echo "La sesion existe";
            // header("Location: index.php?controlador=Listado&accion=listar");
        }

    
    }

}