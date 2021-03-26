<?php

    class miClase{
        //declaramos atributos 
        public $atributo1 = "Hola Mundo";



        //declaramos metodos
        public function miMetodo(){
            //como podemos mandar a llamar un atributo 
            //utilizando la pseudo variable this

            return $this->atributo1;
        }
    }

?>