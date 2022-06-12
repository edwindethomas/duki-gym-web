<?php
session_start();
if(!isset($_SESSION['LogueadoN'])){
    header("Location: ./login.php");
}

?>