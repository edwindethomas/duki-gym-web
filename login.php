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

            <a class="navbar-brand" href="index.php">Duki gym</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">

                    <li class="nav-item">
                        <a href="./index.php#about" class="nav-link smoothScroll">Sobre nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a href="./index.php#class" class="nav-link smoothScroll">Clases</a>
                    </li>
                    <li class="nav-item">
                        <a href="./index.php#contact" class="nav-link smoothScroll">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a href="./login.php" class="nav-link">Iniciar sesión</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

<div class="bg-overlay"></div>

   <div class="container">
        <div class="row">

             <div class="col-lg-8 col-md-10 mx-auto col-12">
                  <div class="text-center form__bg bg-light">

                        <form class="contact-form webform">
                                <label for="inputemail">Ingresa tu correo</label>
                                <input type="email" class="form-control" id="inputemail" placeholder="email@email.com">
                                <label for="inputpassword">Ingresa tu contraseña</label>
                                <input type="password" class="form-control" id="inputpassword" placeholder="Contraseña">
                                <button type="submit" class="form-control" id="submit-button" name="submit">Iniciar sesión</button>
                        </form>
                       
                  </div>
             </div>

        </div>
   </div>
</section>
</body>
</html>