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
</head>
<body>
    <?php include './navtrainer.php';?>
    <div class="container entrenador__titulo">
        <div class="row">
            <div class="col-md-12">
    <form method="POST">
    <div class="form-group">
    <h2 class="entrenador__titulo" id="viewclients">Agregar Ejercicio</h2>
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Ejercicio:</label>
        <input name="ejercicio" required type="text" id="ejercicio" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Repeticiones:</label>
        <input value="" name="repeticiones" required type="text" id="repeticiones" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Peso:</label>
        <input value="" name="peso" required type="text" id="peso" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Dia:</label>
        <input value="" name="dia" required type="text" id="dia" class="form-control">
    </div>
    <button type="submit" class="btn btn-black" name="btnAgregarEjercicio">Agregar Ejercicio</button>
</form>
            </div>
        </div>
        
    </div>
</body>
</html>