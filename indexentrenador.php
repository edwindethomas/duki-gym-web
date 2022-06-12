<?php
session_start();
if(!isset($_SESSION['LogueadoE'])){
    header("Location: ./login.php");
}
?>