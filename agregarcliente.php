<?php

require_once "./bd/conexion.php";
require_once "./agregarclientevista.php";

if(isset($_POST['btnAgregarCliente'])){

    $nombrecompleto = $_POST['nombrecompleto'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];
    $nutriologoid = $_POST['nutriologoid'];

    try {
        $cn = conexion();
        $status = 1;
        $entrenadorid = $entrenador;
        $sqlInsert = "INSERT INTO cliente VALUES (NULL,'$entrenadorid','$nombrecompleto','$usuario','$password',
                    '$status', '$telefono',$nutriologoid)";
        $UsuarioInsert = $cn->query($sqlInsert);
        header("Location: ./indexentrenador.php");
    } catch (Exception $e) {
        echo ("$e");
    }
}
?>