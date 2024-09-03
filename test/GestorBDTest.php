<?php

use PHPUnit\Framework\TestCase;
require_once("./lib/GestorBD.php");


class GestorBDTest extends TestCase
{
    
      public function testConectar()
      {

         $gbd= new GestorBD();


        $this->assertEquals($gbd->conectar(), true);


      }


      public function testGetCanguros() {
            
            $gbd = new GestorBD();
            $gbd->conectar();
    
            // Llamar al método getCanguros() con un argumento vacío
            $resultado = $gbd->getCanguros("");
    
            // Verificar si el resultado es un array
            // $this->assertIsArray($resultado);
    
            // Verificar que el resultado no esté vacío
            $this->assertNotEmpty($resultado);
        }
      
      public function testvalidar()
      {

         $gbd= new GestorBD();
         $gbd->conectar();

         $this->assertEquals($gbd->validar("ale@gmail.com","1234"), true);
     
      }
      
}






