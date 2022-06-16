<?php

require_once "./bd/conexion.php";
require_once "./agregarentrenadorvista.php";

if(isset($_POST['btnAgregarEntrenador'])){

    $nombrecompleto = $_POST['nombrecompleto'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];
    

        try {
            $cn = conexion();
            $status = 1;
            $sqlInsert = "INSERT INTO entrenador VALUES (NULL,'$nombrecompleto','$usuario','$password',
                        '$status', '$telefono')";
            $UsuarioInsert = $cn->query($sqlInsert);
            header("Location: ./indexadmin.php");
        } catch (Exception $e) {
            echo ("$e");
        }
    }
?>