<?php

    class Conectar{
        private $servidor = "localhost";
        private $usuario = "root";
        private $password = "";
        private $bd = "crudpoo";

        public function conexion(){
            $conexion = mysqli_connect($this -> servidor, 
                                    $this -> usuario, 
                                    $this -> password, 
                                    $this -> bd);
            return $conexion;

        }
    }

    $obj = new conectar();
    if($obj -> conexion()){
        echo "conectado con exito";
    }else {
        echo "No se a podido conectar";
    }

?>