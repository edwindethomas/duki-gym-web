<?php
session_start();
if (!isset($_SESSION['LogueadoA'])) {
    header("Location: ./login.php");
}
?>
<?php
$id = $_GET["id"];
include 'bd/selects.php';
$nutriologo = select_nutriologo_id($id);
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
    <?php include './navtrainer.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <form method="POST">
                    <div class="form-group mt-5">
                        <h2 class="" id="viewclients">Actualizar Nutriologo</h2>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="cliente-vista__label">Id:</label>
                        <input value="<?php echo $nutriologo[0][0] ?>" name="id" required type="text" id="id" class="form-control" disabled>
                    </div>

                    <div class="form-group">
                        <label for="nombre" class="cliente-vista__label">Nombre:</label>
                        <input value="<?php echo $nutriologo[0][1] ?>" title="Escribe tu nombre completo iniciando con mayuscula cada palabra" placeholder="Ejemplo: Nombre Apellido1 Apellido2" pattern="^[A-Z]{1}[\p{L} \.'\-]+$" name="nombrecompleto" required type="text" id="nombrecompleto" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="cliente-vista__label">Usuario:</label>
                        <input value="<?php echo $nutriologo[0][2] ?>" title="Escribe tu correo electronico" placeholder="Ejemplo: example@correo.com" name="usuario" required type="email" id="usuario" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="cliente-vista__label">Contraseña:</label>
                        <input value="<?php echo $nutriologo[0][3] ?>" title="Escribe tu contraseña" name="password" required type="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="cliente-vista__label">Status:</label>
                        <input value="<?php echo $nutriologo[0][4] ?>" name="status" required type="number" min="0" max="1" id="status" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="cliente-vista__label">Telefono:</label>
                        <input value="<?php echo $nutriologo[0][5] ?>" title="Escribe tu telefono con 10 digitos" name="telefono" placeholder="Ejemplo: 2299063184" pattern="^[0-9]{10}$" required type="text" id="telefono" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-black" name="btnEditar">Guardar Cambios</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>