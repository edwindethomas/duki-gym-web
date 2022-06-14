<?php
session_start();
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
</head>
<body>
    <?php include './navtrainer.php';?>
    <div class="container entrenador__titulo">
        <div class="row">
            <div class="col-md-12">
    <form method="POST">
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Id:</label>
        <input value="<?php echo $entrenador ?>" name="id" required type="text" id="id" class="form-control" disabled>
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Nombre:</label>
        <input value="" name="nombrecompleto" required type="text" id="nombrecompleto" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Usuario:</label>
        <input value="" name="usuario" required type="email" id="usuario" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Contraseña:</label>
        <input value="" name="password" required type="password" id="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Telefono:</label>
        <input value="" name="telefono" required type="text" id="telefono" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre" class="cliente-vista__label">Nutriologo:</label>
        <input value="" name="nutriologoid" required type="number" min="0" max="1" id="nutriologoid" class="form-control">
    </div>
    <button type="submit" class="btn btn-black" name="btnAgregarCliente">Agregar Cliente</button>
</form>
            </div>
        </div>
        
    </div>
</body>
</html>