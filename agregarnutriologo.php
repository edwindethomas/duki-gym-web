<?php

require_once "./bd/conexion.php";
require_once "./agregarnutriologovista.php";

if(isset($_POST['btnAgregarNutriologo'])){

    $nombrecompleto = $_POST['nombrecompleto'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];
    

        try {
            $cn = conexion();
            $status = 1;
            $sqlInsert = "INSERT INTO nutriologo VALUES (NULL,'$nombrecompleto','$usuario','$password',
                        '$status', '$telefono')";
            $UsuarioInsert = $cn->query($sqlInsert);
            header("Location: ./vernutriadmin.php");
        } catch (Exception $e) {
            echo ("$e");
        }
    }
?>