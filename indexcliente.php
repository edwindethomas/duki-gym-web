<?php
session_start();
if(!isset($_SESSION['LogueadoC'])){
    header("Location: ./login.php");
}
?>