<?php

    class miClase{
        public $mensaje = 1;

        public function hola(){
            return "hola";
        }

        public static function metodo(){
            return self::hola();
        }
    }

    $obj = new miClase();

    echo $obj -> metodo();



?>