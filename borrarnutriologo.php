<?php

require_once "./bd/conexion.php";
include 'vernutriadmin.php';

    $id = $_GET["id"];;

    try {
        $cn = conexion();
        $sqlDelete = "DELETE FROM nutriologo WHERE id='$id'";
        $UsuarioDelete = $cn->query($sqlDelete);

       header("Location: ./vernutriadmin.php");
    } catch (Exception $e) {
        echo ("$e");
    }
?>