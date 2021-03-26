<?php
    //manera incorrecta de mandar metodos dentro de otro metodo
    class Metodos{
        public function mandarColor($valor){
            if ($valor == 1){
                return "rojo";
            }else if($valor == 2){
                return "negro";
            }else if($valor == 3){
                return "azul";
            }
        }

        public function darAltaColor($tipoColor){
            $objeto = new Metodos();
            return $objeto -> mandarColor($tipoColor);

        }

    }

    //manera correcta de mandar metodos dentro de otro metodo

    class Metodo2{

        public function mandarColor($valor){
            if($valor == 1){
                return "rojo";
            }else if ($valor == 2){
                return "negro";
            }else if ($valor == 3){
                return "verde";
            }
        }

        public function darAltaColor($tipoColor){
            return self::mandarColor($tipoColor);
        }

    }


    $obj = new Metodo2();
    echo $obj -> darAltaColor(1);


?>