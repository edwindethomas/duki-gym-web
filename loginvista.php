<!DOCTYPE html>
<html lang="es">

<head>

    <title>Duki Gym Pro</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="Gimnasio de duki para ponerte astral">
    <meta name="author" content="Iván y Edwin desarrolladores web fullstack">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/logodukos.png">

</head>

<body>
    <?php include 'navbar.php';?>
    <section class="d-flex flex-column justify-content-center align-items-center" id="home">



        <div class="sidenav">
            <div class="login-main-text">
                <div>
                    ¡CONVIÉRTETE EN UNA MEJOR VERSION DE TI!
                </div>
            </div>
        </div>
        <div class="main">
            <h1 class="inicio__sesion text-center">Iniciar sesión en Duki gym</h1>
            <div class="login-form">
                <form method="post">
                    <div class="form-group">
                        <label>Correo electrónico</label>
                        <input name="usuario" class="form-control" placeholder="Ejemplo: example@correo.com" title="Escribe tu correo electronico" required type="email">
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input required type="password" name="password" class="form-control" placeholder="Escribe tu contraseña" title="Escribe tu contraseña">
                    </div>
                    <button type="submit" class="btn btn-black mt-2 float-right" name="btnLogin">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>