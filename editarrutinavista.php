<?php
session_start();
if(!isset($_SESSION['LogueadoE'])){
    header("Location: ./login.php");
}
$entrenador = $_SESSION['UserId'];
?>
<?php
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
     <link rel="stylesheet" href="css/clientevista.css">
     <link rel="shortcut icon" href="images/logodukos.png">

</head>
<body>
    <?php include './navtrainer.php';?>
    <div class="container entrenador__titulo">
        <div class="row">
            <div class="col-md-12">
    <form method="POST">
    <div class="form-group">
    <h2 class="mt-2" id="viewclients">Actualizar rutina</h2>
    </div>
        <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Id:</label>
        <input value="<?php echo $rutinas[0][0] ?>" name="id" required type="text" id="id" class="form-control" disabled>
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Ejercicio:</label>
        <input value="<?php echo $rutinas[0][2] ?>" name="ejercicio" pattern="^[A-Z]{1}[a-z ]*$" title="Escribe el ejercicio iniciando con la primer letra mayuscula" placeholder="Ejemplo: Press banca" required type="text" id="ejercicio" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Repeticiones:</label>
        <input value="<?php echo $rutinas[0][3] ?>" pattern="^[0-9]{1,2}$" title="Escribe un numero del 1 al 99" name="repeticiones" placeholder="Ejemplo: 5" required type="text" id="repeticiones" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Peso:</label>
        <input value="<?php echo $rutinas[0][4] ?>" pattern="^[0-9]{1,3}" title="Escribe un numero entre 1 y 999" name="peso" placeholder="Ejemplo: 10" required type="text" id="peso" class="form-control">
    </div>

    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Dia:</label>
        <select  title="" name="dia" placeholder="Ejemplo: Lunes" required type="text" id="dia" class="form-control">
        <option value="<?php echo $rutinas[0][5] ?>" id="dia"><?php echo $rutinas[0][5] ?></option>
        <option value="Lunes" id="dia">Lunes</option>
        <option value="Martes" id="dia">Martes</option>
        <option value="Miercoles" id="dia">Miercoles</option>
        <option value="Jueves" id="dia">Jueves</option>
        <option value="Viernes" id="dia">Viernes</option>
        <option value="Sabado" id="dia">Sabado</option>
        <option value="Domingo" id="dia">Domingo</option>
        </select>
    </div>
    <button type="submit" class="btn btn-black" name="btnEditarRutina">Guardar Cambios</button>
</form>
            </div>
        </div>
        
    </div>
</body>
</html>