<?php
session_start();

if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include 'bd/selects.php';

$rutinas = select_ejercicio_rutina($id);

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Actualizar Ejercicio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/estilos.css">
     <link rel="stylesheet" href="css/entrenador.css">
</head>
<body>
    <?php include './navtrainer.php';?>
    <div class="container entrenador__titulo">
        <div class="row">
            <div class="col-md-12">
    <form method="POST">

        <div class="form-group">
        <label for="nombre">Id:</label>
        <input value="<?php echo $rutinas[0][0] ?>" name="id" required type="text" id="id" class="form-control" disabled>
    </div>

    <div class="form-group">
        <label for="nombre">Ejercicio:</label>
        <input value="<?php echo $rutinas[0][2] ?>" name="ejercicio" required type="text" id="ejercicio" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre">Repeticiones:</label>
        <input value="<?php echo $rutinas[0][3] ?>" name="repeticiones" required type="text" id="repeticiones" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre">Peso: </label>
        <input value="<?php echo $rutinas[0][4] ?>" name="peso" required type="text" id="peso" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre">Dia:</label>
        <input value="<?php echo $rutinas[0][5] ?>" name="dia" required type="text" id="dia" class="form-control">
    </div>
    <button type="submit" class="btn btn-black" name="btnEditarRutina">Guardar Cambios</button>
</form>
            </div>
        </div>
        
    </div>
</body>
</html>