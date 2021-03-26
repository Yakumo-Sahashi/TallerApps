<?php

    class retornoDatos{
        //tipo string entero array json
        public function retornaString($edad){

            if ($edad > 18){
                return "Es mayor de edad";
            }else{
                return "No es mayor de edad";
            }

        
        }
        
        public function retornaEntero($valor){
            
            if ($valor > 0){
                return 1;
            }else{
                return 0;
            }

        }

        public function retornaArreglo($ciclos){
            $datos = array();

            for($i=0; $i < $ciclos; $i++){
                $datos[$i] = $i;
            }

            return $datos;
        }

        public function retornaJson(){
            $arr = array(
                "hdd" => 500,
                "pantalla" => 21,
                "ram" => 8
            );

            return json_encode($arr);
        }
    }

    $Cadena = new retornoDatos();
    var_dump($Cadena->retornaString(20)); 

    echo "<hr>";

    var_dump($Cadena->retornaEntero(3));

    echo "<hr>";

    var_dump($Cadena->retornaArreglo(10));

    echo "<hr>";

    var_dump($Cadena->retornaJson());



?>