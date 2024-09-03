<?php

class HomeControlador
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }


    public function home(){
        require_once ("./modelos/ListadoModelo.php");
        $modelo= new ListadoModelo();
        $data=$modelo;
       

         //Pasar los datos a la vista
         require_once("./vistas/Vista.php");
         $vista= new Vista();
         $vista->render("home", $data);

    }

    
    // public function validar(){

    //     echo "Validar lo que recibo del formulario";
    //     print_r($_POST);

    // }
}

?>


