<?php
$clienteid = $_GET["id"];
require_once "./bd/conexion.php";
require_once "./agregarejerciciovista.php";

if(isset($_POST['btnAgregarEjercicio'])){

    $ejercicio = $_POST['ejercicio'];
    $repeticiones = $_POST['repeticiones'];
    $peso = $_POST['peso'];
    $dia = $_POST['dia'];
    print_r($rutinas);
    try {
        $cn = conexion();
        $sqlInsert = "INSERT INTO rutina VALUES (NULL,'$clienteid','$ejercicio','$repeticiones','$peso',
                    '$dia')";
        $EjercicioInsert = $cn->query($sqlInsert);
        header ("Location: ./verrutina.php?id=$clienteid");
    } catch (Exception $e) {
        echo ("$e");
    }
}
?>