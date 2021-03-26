<?php


    class metodos{
        public function mostrarDatos($sql){
            $c = new Conectar();
            $conexion = $c -> conexion();
            
            $result = mysqli_query($conexion,$sql);

            return mysqli_fetch_all($result, MYSQLI_ASSOC);

        }

        public function insertarDatos($datos){
            $c = new Conectar();
            $conexion = $c -> conexion();

            $sql = "INSERT INTO t_persona (nombre,apellido) VALUES ('$datos[0]','$datos[1]')";
            return $result = mysqli_query($conexion,$sql);
        }

        public function actualizarDatos($datos){
            $c = new Conectar();
            $conexion = $c -> conexion();

            $sql = "UPDATE t_persona SET nombre='$datos[0]',apellido='$datos[1]' WHERE id='$datos[2]'";
            return $result = mysqli_query($conexion,$sql);
        }

        public function eliminarDatos($id){
            $c = new Conectar();
            $conexion = $c -> conexion();
            $sql = "DELETE FROM t_persona WHERE id='$id'";

            return $result = mysqli_query($conexion,$sql);

        }


    }



?>