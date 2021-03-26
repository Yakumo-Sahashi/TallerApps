<?php

    //un metodo privado solo puede ser accedido en la misma clase donde fue cread
    //al mismo tiempo no puede mostrarse fuera o en instancia 
    //debe manejarse dentro de un metodo de la misma clase

    class Clase1{

        private function saludar(){
            return "Saludando";
        }

        public function mandaSaludo(){
            return self::saludar();
        }
        
    }

    $clase = new Clase1();

    echo $clase -> mandaSaludo();


?>