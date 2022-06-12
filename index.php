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
                        <a href="#about" class="nav-link">Sobre nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a href="#class" class="nav-link">Clases</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contacto</a>
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
                              <div class="hero-text mt-5 text-center">

                                    <h6>Nueva forma de entrenar en el mejor gimnasio</h6>

                                    <h1 class="text-white">Mantén saludable tu cuerpo</h1>

                                    <a href="#feature" class="btn custom-btn mt-3">Empieza hoy</a>

                                    <a href="#about" class="btn custom-btn bordered mt-3">Conócenos</a>
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>


     <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white">¡Eres nuevo en el gimnasio?</h2>

                    <h6 class="mb-4 text-white" >Tendrás una membresía de 3 meses gratis, tu 4to mes es gratis</h6>

                    <p class="btn custom-btn bg-color mt-3">Ven y hazte miembro ahora</p>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                     <div class="about-working-hours">
                          <div>

                                <h2 class="mb-4 text-white">Horarios</h2>

                               <strong class="mt-3 d-block">Lunes a Viernes</strong>
                                <p >6:00 AM - 11:00 PM</p>

                                <strong class="mt-3 d-block">Sábados</strong>

                                <p>8:00 AM - 4:00 PM</p>
                               </div>
                          </div>
                     </div>
                </div>

            </div>
        </div>
    </section>

     <section class="about section" id="about">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4">Somos Duko gym</h2>

                                <p>¿Te partieron el corazón? Nosotros te hacemos pasar de Duki a Duko, mejorando tu estilo de vida.
                                    Conoce a nuestros entrenadores, ellos están dispuestos a ayudar a mejorar tu salud.
                                </p>

                                <p>Si tienes dudas sobre Duki gym no dudes es contactarnos, nosotros te responderemos de la mejor manera y estaremos
                                    dispuestos a ayudarte en lo que necesites.
                                </p>

                            </div>

                            <div class="ml-lg-auto col-lg-3 col-md-6 col-12">
                                <div class="team-thumb">
                                    <img src="images/team/team-image.jpg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3>Cristiano R.</h3>
                                        <span>Entrenador</span>

                                        <ul class="social-icon mt-3">
                                            <li><a href="https://www.instagram.com/cristiano/" target="_blank" class="fa fa-instagram"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12">
                                <div class="team-thumb">
                                    <img src="images/team/team-image01.jpg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3>Leo Messi</h3>
                                        <span>Nutriólogo</span>

                                        <ul class="social-icon mt-3">
                                            <li><a href="https://www.instagram.com/leomessi/?hl=es" class="fa fa-instagram"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>


     <!-- CLASS -->
     <section class="class section" id="class">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center mb-5">
                                <h6>Consigue tu figura deseada</h6>

                                <h2>Nuestras areas</h2>
                             </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="class-thumb">
                                    <img src="images/class/yoga-class.jpg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="text-center">Pesas</h3>
                                        <p class="text-justify">Contamos con area de pesas que te ayudarán a hacer crecer tus músculos.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12">
                                <div class="class-thumb">
                                    <img src="images/class/crossfit-class.jpg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="text-center">Maquinas</h3>
                                        <p class="text-justify">Al igual que las pesas te ayudará a hacer ganar resistencia y a quemar calorías.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12">
                                <div class="class-thumb">
                                    <img src="images/class/cardio-class.jpg" class="img-fluid" alt="Class">
                                    <div class="class-info">
                                        <h3 class="text-center">Cardio</h3>
                                        <p>Con el cardio ganaras una gran resistencia y adelgazaras de una forma rápida.</p>
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>
     <section class="contact section" id="contact">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2">Siéntete libre de preguntar cualquier duda</h2>

                        <form action="#" method="post" class="contact-form webform">
                            <input type="text" class="form-control" name="cf-name" placeholder="Nombre">

                            <input type="email" class="form-control" name="cf-email" placeholder="Correo electrónico">

                            <textarea class="form-control" rows="5" name="cf-message" placeholder="Mensaje" row="5" style="resize: none;"></textarea>

                            <button type="submit" class="form-control" id="submit-button" name="submit">Enviar</button>
                        </form>
                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4">Nos puedes encontrar en</h2>

                        <p><i class="fa fa-map-marker mr-1"></i>Av. San, Dr. Rafael Cuervo X 1150, 91855 Veracruz, Ver</p>
                        <div class="google-map">
                           <iframe src="https://maps.google.com/maps?q=Av.%20San,%20Dr.%20Rafael%20Cuervo%20X%201150,%2091855%20Veracruz,%20Ve+(Mi%20nombre%20de%20egocios)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="1920" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <footer class="site-footer">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-4 col-md-5">
                        <p class="copyright-text">Copyright &copy; 2022 Duki gym.
                    </div>

                    <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                        <p class="mr-4">
                            <i class="fa fa-envelope-o mr-1"></i>
                            <a href="#">duko@dukigym.com</a>
                        </p>

                        <p><i class="fa fa-phone mr-1"></i> 229-200-1234</p>
                    </div>
                    
               </div>
          </div>
     </footer>
</body>
</html>