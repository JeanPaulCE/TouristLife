<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/solid.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/typografias.css">
    <link rel="stylesheet" href="./css/generico.css">
    <link rel="stylesheet" href="./css/inicioSesion.css">
    <title>iniciarSesion</title>

</head>

<body>
    <section>
        <header>
            <section class="nav-sec ">
                <nav class="nav-bar inner-grid">
                    <div class="d-logo">
                        <a href="/" class="logo">Tourist<span>Life</span></a>
                    </div>
                    <div>

                        <label for="menu" class="bars">
                            <img src="./imgs/svg/bars.svg" alt="menu bar">
                        </label>
                    </div>
                    <input id="menu" type="checkbox">
                    <div class="end">
                        <ul class="nav-items">
                            <li class="nav-item"><a href="/">inicio</a></li>

                            <label for="menu2" class="menu2">

                                <li class="nav-item-cluster">
                                    <a href="/galeria">categoria</a>
                                    <input id="menu2" type="checkbox">
                                    <ul class="cluster">

                                        <li><a href="/playa">Playa</a></li>
                                        <li><a href="/montana">Montaña</a></li>
                                        <li><a href="./ciudad.html">Ciudad</a></li>
                                    </ul>
                                </li>
                            </label>
                            <!-- <li class="nav-item"><a href="">acerca de</a></li> -->
                            <li class="nav-item"><a href="./inicioSesion.html">iniciar sesion</a></li>
                        </ul>
                    </div>
                </nav>
            </section>
        </header>
        <section class="background background-login">
            <div class="box">
                <form class="center" action="/administracion-lugar" method="get">
                    <h3 class=" form-label">Iniciar Sesión</h3>
                    <input class="form-input form-input-inicio" type="email" name="email"
                        placeholder="correo electronico">
                    <input class="form-input form-input-inicio" type="password" name="password"
                        placeholder="contraseña">
                    <input class="form-submit" type="submit" value="Iniciar sesión">
                    <a class="links" href="/recuperar">¿Has olvidado tu contraseña?</a>
                    <a class=" links" href="/registro">Registrarse</a>
                </form>


            </div>
        </section>

        <!--     FOOTER COMPONENT -->
        <section class="footer-section">
            <footer class="footer inner-grid">
                <ul class="footer-elements center">
                    <span class="st-1">
                        <li class="footer-element"><i class="fab fa-facebook"></i></li>
                        <li class="footer-element"><i class="fab fa-instagram"></i></li>
                        <li class="footer-element"><i class="fab fa-twitter"></i></li>
                        <li class="footer-element"><i class="fab fa-youtube"></i></li>
                    </span>
                    <li class="footer-element"><a href="">Read the FAQ, the Terms & Conditions and the Privacy
                            Policy</a></li>

                </ul>
            </footer>
        </section>

    </section>
</body>

</html>