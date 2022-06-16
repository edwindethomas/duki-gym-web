<?php
session_start();
if(!isset($_SESSION['LogueadoN'])){
    header("Location: ./login.php");
}
    $nutricionista = $_SESSION['UserId'];
?>
<?php
$id = $_GET["id"];
include 'bd/selects.php';

$comidas = select_comida_dieta($id);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Actualizar comida</title>
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
        <div class="row mt-5">
            <div class="col-md-12 mt-5">
    <form method="POST">
    <div class="form-group">
    <h2 class="mt-2" id="viewclients">Actualizar comida</h2>
    </div>
        <div class="form-group">
        <label for="id" class="cliente-vista__label">Id:</label>
        <input value="<?php echo $comidas[0][0] ?>" name="id" required type="text" id="id" class="form-control" disabled>
    </div>
    <div class="form-group">
        <label for="comida" class="cliente-vista__label">Comida:</label>
        <input value="<?php echo $comidas[0][2] ?>" name="comida" pattern="^[A-Z]{1}[a-z ]*$" title="Escribe la comida iniciando con la primer letra mayuscula" placeholder="Ejemplo: Frijoles" required type="text" id="comida" class="form-control">
    </div>
    <div class="form-group">
        <label for="porcion" class="cliente-vista__label">Porcion en gramos:</label>
        <input value="<?php echo $comidas[0][3] ?>" pattern="^[0-9]{1,3}$" title="Escribe un numero del 1 al 999" name="porcion" placeholder="Ejemplo: 25" required type="text" id="porcion" class="form-control">
    </div>
    <div class="form-group">
        <label for="hora" class="cliente-vista__label">Hora:</label>
        <input value="<?php echo $comidas[0][4] ?>" pattern="^([0-1]?[0-9]|[2][0-3]):([0-5][0-9])(:[0-5][0-9])?$" title="Escribe una hora" name="hora" placeholder="Ejemplo: 10:00" required type="text" id="hora" class="form-control">
    </div>

    <div class="form-group">
        <label for="dia" class="cliente-vista__label">Dia:</label>
        <select  title="" name="dia" placeholder="Ejemplo: Lunes" required type="text" id="dia" class="form-control">
        <option value="<?php echo $comidas[0][5] ?>" id="dia"><?php echo $comidas[0][5] ?></option>
        <option value="Lunes" id="dia">Lunes</option>
        <option value="Martes" id="dia">Martes</option>
        <option value="Miercoles" id="dia">Miercoles</option>
        <option value="Jueves" id="dia">Jueves</option>
        <option value="Viernes" id="dia">Viernes</option>
        <option value="Sabado" id="dia">Sabado</option>
        <option value="Domingo" id="dia">Domingo</option>
        </select>
    </div>
    <button type="submit" class="btn btn-black" name="btnEditarDieta">Guardar Cambios</button>
</form>
            </div>
        </div>
        
    </div>
</body>
</html>