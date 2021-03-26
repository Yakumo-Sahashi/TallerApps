<?php

    class clasePader{
        public function metodoPader(){
            return "Hola desde el pader";
        }
    }

    class claseHijo extends clasePader{

    
    }

    //la herencia es obtener todas las propiedades de una clase a otra mediante la palabra reservada extends


    //insancia rapida o de doble puntuacion 
    
    $obj = new claseHijo();

    echo $obj -> metodoPader();
    //Hasta aqui herencia comienza propiedad parent
    echo "<hr>";

    class clasePadre{

        public function metodoPadre(){
            return "Hola desde la clase Padre";
        }

        public function metodo1(){
            return "Este es metodo padre";
        }


    }

    class claseHija extends clasePadre{

        public function metodoHija(){
            return parent::metodo1();
            //self manda a llamarse asi mismo
            //parent ocupa el metodo de la herencia
            
        }

        public function metodo1(){
            return "Este es metodo hijo";
        }

        

    }

    $obj1 = new claseHija();

    echo $obj1->metodoHija();

?>