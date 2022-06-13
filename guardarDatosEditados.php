<?php 
    include 'bd/selects.php';

    if( !isset($_POST["id"]) ||
        !isset($_POST["nombrecompleto"]) ||
        !isset($_POST["usuario"]) ||
        !isset($_POST["password"]) ||
        !isset($_POST["status"]) ||
        !isset($_POST["telefono"])
    ) exit();

    $id = $_POST["id"];
    $nombrecompleto = $_POST["nombrecompleto"];
    $usuario = $_POST["nombrecompleto"];
    $password = $_POST["password"];
    $status = $_POST["status"];
    $telefono = $_POST["telefono"];

    $resultado = update_cliente_id($id,$nombrecompleto,$usuario,$password,$status,$telefono);
    echo $id;
?>