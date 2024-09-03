<?php

class InicioControlador
{
    public function __construct(Type $var =null){

        

    }
    public function irAInicio(){

        require_once("./vistas/Vista.php");
        $vista= new Vista();
        //al validar esto debemos de cambiar el campo para que nos vaya a home
        $vista->render("inicio",array());

    }

    public function validar(){

        // echo "Validar lo que recibo del formulario";
        // 
        if (isset($_POST["email"]) && !empty($_POST["email"]) &&
            isset($_POST["contrasena"]) && !empty($_POST["contrasena"])) {
        
            require_once("./modelos/InicioModelo.php");
            $modelo = new InicioModelo();
            $data = $modelo->validar($_POST["email"], $_POST["contrasena"]);
            
            // Verificar si los datos son válidos
            if ($data) {
                echo "Correo electrónico o contraseña correctos.";
                require_once("./lib/GestorSesiones.php");
                $ses= new GestorSesiones();
                $ses->crearSesion("CLAVE", $_POST["email"], $_POST["contrasena"]);
                // if($ses->existeSesion("CLAVE"));
                // {
                //     // con esto creamos la sesion 
                //     // echo $ses->obtenerValorDeSesion("CLAVE");
                //     // echo "La sesion existe";
                // }
                
                header("Location: index.php?controlador=home&accion=home");

            } else {
                $data["errorvalidacion"]="El usuario o contraseña introducido no existe.";
                
                require_once("./vistas/Vista.php");
                $vista= new Vista();
                $vista->render("inicio",$data);
            }
    } else {
         echo "Por favor, ingresa un correo electrónico y una contraseña válidos.";
    }

    }
}
?>