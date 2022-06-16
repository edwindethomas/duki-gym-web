<?php

require_once "./bd/conexion.php";
require_once "./editarentrenadorvista.php";

if(isset($_POST['btnEditar'])){

    $id = $entrenador[0][0];
    $nombrecompleto = $_POST['nombrecompleto'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $telefono = $_POST['telefono'];

    try {
        $cn = conexion();
        $sqlUpdate="UPDATE entrenador SET 
        nombrecompleto = '$nombrecompleto', 
        usuario = '$usuario', 
        password = '$password', 
        status = '$status', 
        telefono = '$telefono' WHERE id = '$id'";

       $UsuarioUpdate = $cn->query($sqlUpdate);
       header("Location: ./indexadmin.php");
    } catch (Exception $e) {
        echo ("$e");
    }
}
?>