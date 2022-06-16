<?php
$clienteid = $_GET["id"];
require_once "./bd/conexion.php";
require_once "./agregarcomidavista.php";

if(isset($_POST['btnAgregarComida'])){

    $comida = $_POST['comida'];
    $porcion = $_POST['porcion'];
    $hora = $_POST['hora'];
    $dia = $_POST['dia'];
    try {
        $cn = conexion();
        $sqlInsert = "INSERT INTO dieta VALUES (NULL,'$clienteid','$comida','$porcion','$hora',
                    '$dia')";
        $EjercicioInsert = $cn->query($sqlInsert);
        header ("Location: ./verdieta.php?id=$clienteid");
    } catch (Exception $e) {
        echo ("$e");
    }
}
?>