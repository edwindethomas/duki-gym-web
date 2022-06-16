<?php
session_start();
if(!isset($_SESSION['LogueadoE'])){
    header("Location: ./login.php");
}
$entrenador = $_SESSION['UserId'];
?>
<?php 
include 'bd/selects.php';
$clienteid = $_GET["id"];
$rutinas = select_rutina_cliente($clienteid);
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Agregar ejercicio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/estilos.css">
     <link rel="stylesheet" href="css/entrenador.css">
     <link rel="stylesheet" href="css/clientevista.css">
     <link rel="shortcut icon" href="images/logodukos.png">
</head>
<body>
    <?php include './navtrainer.php';?>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
    <form method="POST">
    <div class="form-group">
    <h2 class="entrenador__titulo" id="viewclients">Agregar Ejercicio</h2>
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Ejercicio:</label>
        <input name="ejercicio" pattern="^[A-Z]{1}[a-z ]*$" title="Escribe el ejercicio iniciando con la primer letra mayuscula" placeholder="Ejemplo: Press banca" required type="text" id="ejercicio" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Repeticiones:</label>
        <input value="" pattern="^[0-9]{1,2}$" title="Escribe un numero del 1 al 99" name="repeticiones" placeholder="Ejemplo: 5" required type="text" id="repeticiones" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Peso:</label>
        <input value="" pattern="^[0-9]{1,3}" title="Escribe un numero entre 1 y 999" name="peso" placeholder="Ejemplo: 10" required type="text" id="peso" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Dia:</label>
        <select title="Selecciona un dia de la semana" name="dia" placeholder="Ejemplo: Lunes" required type="text" id="dia" class="form-control">
        <option value="Lunes" id="dia">Lunes</option>
        <option value="Martes" id="dia">Martes</option>
        <option value="Miercoles" id="dia">Miercoles</option>
        <option value="Jueves" id="dia">Jueves</option>
        <option value="Viernes" id="dia">Viernes</option>
        <option value="Sabado" id="dia">Sabado</option>
        <option value="Domingo" id="dia">Domingo</option>
        </select>
    </div>

    <button type="submit" class="btn btn-black" name="btnAgregarEjercicio">Agregar Ejercicio</button>
</form>
            </div>
        </div>
        
    </div>
</body>
</html>