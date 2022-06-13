<?php

require_once "./bd/conexion.php";
include 'indexentrenador.php';

    $id = $cliente[0][0];

    try {
        $cn = conexion();
        $sqlDelete = "DELETE FROM cliente WHERE id='$id'";
        $UsuarioDelete = $cn->query($sqlDelete);

       header("Location: ./indexentrenador.php");
    } catch (Exception $e) {
        echo ("$e");
    }
?>