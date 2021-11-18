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
    <link rel="stylesheet" href="./css/detalle-lugar.css">
    <title>TouristLife</title>
</head>

<body>
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
                                <p>categoria</p>
                                <input id="menu2" type="checkbox">
                                <ul class="cluster">
                                    <li><a href="/galeria">Galeria</a></li>
                                    <li><a href="/playa">Playa</a></li>
                                    <li><a href="/montana">Montaña</a></li>
                                    <li><a href="/ciudad">Ciudad</a></li>
                                </ul>
                            </li>
                        </label>
                        <!-- <li class="nav-item"><a href="">acerca de</a></li> -->
                        <li class="nav-item"><a href="/inicioSesion">iniciar sesion</a></li>
                    </ul>
                </div>
            </nav>
        </section>
    </header>
    <section class="main">

        <section class="inner-grid">
            <div class="detail-container">
                <div class="elements-d">
                    <img class="inner-image" src="./imgs/prueba-detalle.jpg" alt="imagen">
                    <div class="inner-text">
                        <h3 class="detail-title text-16">Título</h3>
                        <p class="detail-description text-16">Descripción. Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                            veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                            commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                            molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
                            iusto odio dignissim qui blandit praesent luptatum zzril delenit augue.</p>
                    </div>
                </div>
                <div class="inner-row">
                    <p class="detail-bottom text-16">usuario</p>
                    <p class="detail-bottom text-16">categoria</p>
                    <p class="detail-bottom text-16">dd/mm/aaaa</p>
                    <div class="detail-bottom text-16">
                        <div class="inner-like">
                            <p class="center-vertical mr-02">1</p>
                            <input id="like" type="checkbox">
                            <label for="like" class="center-vertical">
                                <i class="fas fa-heart"></i>
                            </label>
                        </div>
                    </div>

                </div>
            </div>
            <p class="center"><a class="links text-20" href="#">Seguir viendo</a></p>
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