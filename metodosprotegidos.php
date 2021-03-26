<?php

    //los metodos protegidos solo pueden ser accedidos desde herencia de clases
    //o solo desde clases hijas y debe ser utilizado por un metodo hijo

    class clasePadre{
        protected function metodoPadre(){
            return "metodo protegido";
        }
    }   

    class claseHija extends clasePadre{
        
        public function muestraParent(){
            return parent::metodoPadre();
        }

    }

    $obj = new claseHija();

    echo $obj -> muestraParent();


?>