<?php
session_start();
if(!isset($_SESSION['LogueadoE'])){
    header("Location: ./login.php");
}
$entrenador = $_SESSION['Id'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Actualizar cliente</title>
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
    <h2 class="entrenador__titulo" id="viewclients">Agregar Cliente</h2>
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Entrenador ID:</label>
        <input value="<?php echo $entrenador ?>" name="id" required type="text" id="id" title="Este es tu ID de entrenador" class="form-control" disabled>
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Nombre:</label>
        <input  title="Escribe tu nombre completo iniciando con mayuscula cada palabra" placeholder="Ejemplo: Nombre Apellido1 Apellido2" pattern="^[A-Z]{1}[\p{L} \.'\-]+$" name="nombrecompleto" required type="text" id="nombrecompleto" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Usuario:</label>
        <input value="" title="Escribe tu correo electronico" placeholder="Ejemplo: example@correo.com" name="usuario" required type="email" id="usuario" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Contraseña:</label>
        <input value="" title="Escribe tu contraseña" name="password" required type="password" id="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Telefono:</label>
        <input value="" title="Escribe tu telefono con 10 digitos" name="telefono" placeholder="Ejemplo: 2299063184" pattern="^[0-9]{10}$" required type="text" id="telefono" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Nutriologo ID:</label>
        <input value="" pattern="^[0-9]{1,3}" title="Asigna un nutriologo existente" placeholder="Ejemplo: 1" name="nutriologoid" id="nutriologoid" class="form-control">
    </div>
    <button type="submit" class="btn btn-black" name="btnAgregarCliente">Agregar Cliente</button>
</form>
            </div>
        </div>
        
    </div>
</body>
</html>