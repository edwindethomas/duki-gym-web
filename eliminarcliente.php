<?php

require_once "./bd/conexion.php";
include 'indexentrenador.php';

    $id = $_GET["id"];;

    try {
        $cn = conexion();
        $sqlDelete = "DELETE FROM cliente WHERE id='$id'";
        $UsuarioDelete = $cn->query($sqlDelete);

       header("Location: ./indexentrenador.php");
    } catch (Exception $e) {
        echo ("$e");
    }
?>