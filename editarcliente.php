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
	<title>Registrar persona</title>
</head>
<body>
	<form method="post" action="guardarDatosEditados.php">

		<label for="nombre">Nombre:</label>
		<br>
		<input value="<?php echo $persona->nombre ?>" name="nombre" required type="text" id="nombre" placeholder="Escribe tu nombre...">
		<br><br>
		
		<br><br><input type="submit" value="Guardar cambios">
	</form>
</body>
</html>