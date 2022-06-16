<?php
session_start();
if(!isset($_SESSION['LogueadoN'])){
    header("Location: ./login.php");
}
    $nutricionista = $_SESSION['UserId'];
?>
<?php 
include 'bd/selects.php';
$clienteid = $_GET["id"];
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
    <?php include './navnutri.php';?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
    <form method="POST">
    <div class="form-group">
    <h2 class="entrenador__titulo" id="viewclients">Agregar Comida</h2>
    </div>
    <div class="form-group">
        <label for="comida" class="cliente-vista__label">Comida:</label>
        <input name="comida" pattern="^[A-Z]{1}[a-z ]*$" title="Escribe la comida iniciando con la primer letra mayuscula" placeholder="Ejemplo: Frijoles hervidos" required type="text" id="comida" class="form-control">
    </div>
    <div class="form-group">
        <label for="porcion" class="cliente-vista__label">Porcion en gramos:</label>
        <input value="" pattern="^[0-9]{1,3}$" title="Escribe un numero del 1 al 999" name="porcion" placeholder="Ejemplo: 25" required type="text" id="porcion" class="form-control">
    </div>
    <div class="form-group">
        <label for="hora" class="cliente-vista__label">Hora:</label>
        <input value="" pattern="^([0-1]?[0-9]|[2][0-3]):([0-5][0-9])(:[0-5][0-9])?$"name="hora" placeholder="Ejemplo: 07:00" title="Escribe una hora en formato de 12 hrs" required type="text" id="hora" class="form-control">
    </div>
    <div class="form-group">
        <label for="dia" class="cliente-vista__label">Dia:</label>
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

    <button type="submit" class="btn btn-black" name="btnAgregarComida">Agregar Comida</button>
</form>
            </div>
        </div>
        
    </div>
</body>
</html>