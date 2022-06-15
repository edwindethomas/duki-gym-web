<?php

require_once "./bd/conexion.php";
include 'verrutina.php';
$rutinas = select_ejercicio_rutina($id);

    $id = $_GET["id"];
    $clientid = $_GET["clientid"];

    try {
        $cn = conexion();
        $sqlDelete = "DELETE FROM rutina WHERE id='$id'";
        $RutinaDelete = $cn->query($sqlDelete);

        header ("Location: ./verrutina.php?id=$clientid");
    } catch (Exception $e) {
        echo ("$e");
    }
?>