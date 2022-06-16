<?php

require_once "./bd/conexion.php";
include 'indexadmin.php';

    $id = $_GET["id"];;

    try {
        $cn = conexion();
        $sqlDelete = "DELETE FROM entrenador WHERE id='$id'";
        $UsuarioDelete = $cn->query($sqlDelete);

       header("Location: ./indexadmin.php");
    } catch (Exception $e) {
        echo ("$e");
    }
?>