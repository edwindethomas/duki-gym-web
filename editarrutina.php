<?php

require_once "./bd/conexion.php";
require_once "./editarrutinavista.php";

if(isset($_POST['btnEditarRutina'])){

    $id = $rutinas[0][0];
    $clienteid = $rutinas[0][1];
    $ejercicio = $_POST['ejercicio'];
    $repeticiones = $_POST['repeticiones'];
    $peso = $_POST['peso'];
    $dia = $_POST['dia'];



    try {
        $cn = conexion();
        $sqlUpdate="UPDATE rutina SET 
        ejercicio = '$ejercicio', 
        repeticiones = '$repeticiones', 
        peso = '$peso', 
        dia = '$dia' WHERE id = '$id'";

       $RutinaUpdate = $cn->query($sqlUpdate);

      header ("Location: ./verrutina.php?id=$clienteid");
    } catch (Exception $e) {
        echo ("$e");
    }
}
?>