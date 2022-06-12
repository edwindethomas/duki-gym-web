<?php
#require_once "./bd/conexion.php";
#require_once "./bd/datamodel.php";

session_start(); #Activo la persistencia #Siempre será la primera instruccion ejecutable

echo $_SESSION['Logueado'];
if(isset($_SESSION['Logueado'])){
    if($_SESSION['Logueado']){
        echo "Prueba";
        header("Location: indexcliente.php");
    }
}
?>