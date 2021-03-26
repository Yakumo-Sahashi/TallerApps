<?php
    require_once "../conexion.php";
     require_once "../metodosCrud.php";


    $id= $_GET['id'];
    $obj = new metodos();

    if($obj -> eliminarDatos($id)){
        header("location:../index.php");
    }else{
        echo "fallo al eliminar";
    }


?>