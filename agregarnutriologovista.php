<?php
session_start();
if (!isset($_SESSION['LogueadoA'])) {
    header("Location: ./login.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Actualizar nutriologo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/entrenador.css">
    <link rel="stylesheet" href="css/clientevista.css">
    <link rel="shortcut icon" href="images/logodukos.png">
</head>

<body>
    <?php include './navadmin.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <form method="POST">
                    <div class="form-group">
                        <h2 class="entrenador__titulo mt-5" id="viewclients">Agregar Nutriologo</h2>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="cliente-vista__label">Nombre:</label>
                        <input title="Escribe el nombre completo iniciando con mayuscula cada palabra" placeholder="Ejemplo: Nombre Apellido1 Apellido2" pattern="^[A-Z]{1}[\p{L} \.'\-]+$" name="nombrecompleto" required type="text" id="nombrecompleto" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="cliente-vista__label">Usuario:</label>
                        <input value="" title="Escribe el correo electronico" placeholder="Ejemplo: example@correo.com" name="usuario" required type="email" id="usuario" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="cliente-vista__label">Contraseña:</label>
                        <input value="" title="Escribe la contraseña" name="password" placeholder="Escribe la contraseña" required type="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="cliente-vista__label">Telefono:</label>
                        <input value="" title="Escribe tu telefono con 10 digitos" name="telefono" placeholder="Ejemplo: 2299063184" pattern="^[0-9]{10}$" required type="text" id="telefono" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-black" name="btnAgregarNutriologo">Agregar Nutriologo</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>