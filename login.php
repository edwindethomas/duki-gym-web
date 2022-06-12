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

</head>

<body>
    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.php">DUKI GYM</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">

                    <li class="nav-item">
                        <a href="./index.php#about" class="nav-link">Conocenos</a>
                    </li>

                    <li class="nav-item">
                        <a href="./index.php#class" class="nav-link">Areas</a>
                    </li>
                    <li class="nav-item">
                        <a href="./index.php#contact" class="nav-link">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a href="./login.php" class="nav-link">Iniciar sesión</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
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
                <form>
                    <div class="form-group">
                        <label>Correo electrónico</label>
                        <input type="text" class="form-control" placeholder="Correo electrónico">
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" placeholder="Contraseña">
                    </div>
                    <button type="submit" class="btn btn-black">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>