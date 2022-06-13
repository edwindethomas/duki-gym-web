<?php 
    if(!isset($_GET["id"])) exit();
    $id = $_GET["id"];
    include './bd/selects.php';
    $resultado = eliminar_cliente($id);
?>