<?php

class GestorBD{
    
    private $conn;

    public function __construct(Type $var = null){
        $this-> var = $var;
    }
    public function conectar(){
        $this-> conn= new mysqli("localhost", "root","", "tarehome");
    
        if ($this->conn->connect_error!=null)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public function getCanguros()
    {
        $sql = "SELECT * FROM canguros";
        // echo $sql;
        $result = $this->conn->query($sql);
        
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        
        return $data;
    }
    public function validar($email, $contrasena)
    {
        // Evitar inyección de sql
        $sql = "SELECT * FROM usuarios WHERE email = '" . $email . "' AND contrasena = '" . $contrasena . "'";
        // echo $sql;
        $result = $this->conn->query($sql);

        if($result->num_rows > 0)
        {
            return true;
        }
        return false;
        
       
    }
}


?>