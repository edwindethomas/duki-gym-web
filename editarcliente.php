<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include 'bd/selects.php';
$cliente = select_cliente_id($id);

if($cliente === FALSE){
	#No existe
	echo "¡No existe alguna persona con ese ID!";
	exit();
}

print_r($cliente);
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
</head>
<body>
    <?php include './navtrainer.php';?>
    <div class="container entrenador__titulo">
        <div class="row">
            <div class="col-md-12">
            <form method="POST" action="./guardarDatosEditados.php">
    
        <div class="form-group">
        <label for="nombre">Id:</label>
        <input value="<?php echo $cliente[0][0] ?>" name="id" required type="text" id="id" class="form-control" disabled>
    </div>

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input value="<?php echo $cliente[0][2] ?>" name="nombrecompleto" required type="text" id="nombrecompleto" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre">Usuario:</label>
        <input value="<?php echo $cliente[0][3] ?>" name="usuario" required type="email" id="usuario" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre">Contraseña:</label>
        <input value="<?php echo $cliente[0][4] ?>" name="password" required type="password" id="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre">Status:</label>
        <input value="<?php echo $cliente[0][5] ?>" name="status" required type="number" min="0" max="1" id="status" class="form-control">
    </div>
    <div class="form-group">
        <label for="nombre">Telefono:</label>
        <input value="<?php echo $cliente[0][6] ?>" name="telefono" required type="text" id="telefono" class="form-control">
    </div>
        <input type="submit" class="btn btn-primary" value="Guardar cambios">
</form>
            </div>
        </div>
        
    </div>
</body>
</html>