<?php

require_once "./bd/conexion.php";
require_once "./editardietavista.php";

if(isset($_POST['btnEditarDieta'])){

    $id = $comidas[0][0];
    $clienteid = $comidas[0][1];
    $comida = $_POST['comida'];
    $porcion = $_POST['porcion'];
    $hora = $_POST['hora'];
    $dia = $_POST['dia'];



    try {
        $cn = conexion();
        $sqlUpdate="UPDATE dieta SET 
        comida = '$comida', 
        porcion = '$porcion', 
        hora = '$hora', 
        dia = '$dia' WHERE id = '$id'";

       $RutinaUpdate = $cn->query($sqlUpdate);

      header ("Location: ./verdieta.php?id=$clienteid");
    } catch (Exception $e) {
        echo ("$e");
    }
}
?>