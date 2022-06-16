<?php

require_once "./bd/conexion.php";
include 'verdieta.php';
$rutinas = select_comida_dieta($id);

    $id = $_GET["id"];
    $clientid = $_GET["clientid"];

    try {
        $cn = conexion();
        $sqlDelete = "DELETE FROM dieta WHERE id='$id'";
        $DietaDelete = $cn->query($sqlDelete);

        header ("Location: ./verdieta.php?id=$clientid");
    } catch (Exception $e) {
        echo ("$e");
    }
?>