<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/solid.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/typografias.css">
    <link rel="stylesheet" href="./css/generico.css">
    <link rel="stylesheet" href="./css/administracion.css">
    <title>sistema de Administración</title>
</head>

<body>

    <?php 
        include "header.php";
    ?>

    <section class="background background-admin">

        <h2 class="title">Sistema de Administración</h2>

        <section class="center">

            <div class="col-title">
                <a class="tab left" href="./administracion-personas.php">Personas Registradas</a>
                <a class="tab-two right" href="./administracion-lugar.php">Lugares Pendientes</a>
            </div>

        </section>

        <section class="banner">


            <section>

                <section class="profile-background inner-col">
                    <div class="inline col-profile">
                        <div class="col-img">
                            <img class="profile-img">
                        </div>
                        <div class="col-txt">
                            <h3 class="profile-title">Nombre Usuario</h3>
                            <p class="profile-p">example@gmail.com</p>
                        </div>
                        <div class="col-mas">
                            <a class="view" href="/usuario.html">ver Perfil <i class="fas fa-arrow-right"></i> </a>
                        </div>
                    </div>

                </section>

                <section class="profile-background inner-col">
                    <div class="inline col-profile">
                        <div class="col-img">
                            <img class="profile-img">
                        </div>
                        <div class="col-txt">
                            <h3 class="profile-title">Nombre Usuario</h3>
                            <p class="profile-p">example@gmail.com</p>
                        </div>
                        <div class="col-mas">
                            <a class="view" href="/usuario.html">ver Perfil <i class="fas fa-arrow-right"></i> </a>
                        </div>
                    </div>

                </section>

                <section class="profile-background inner-col">
                    <div class="inline col-profile">
                        <div class="col-img">
                            <img class="profile-img">
                        </div>
                        <div class="col-txt">
                            <h3 class="profile-title">Nombre Usuario</h3>
                            <p class="profile-p">example@gmail.com</p>
                        </div>
                        <div class="col-mas">
                            <a class="view" href="/usuario.html">ver Perfil <i class="fas fa-arrow-right"></i> </a>
                        </div>
                    </div>

                </section>

                <section class="profile-background inner-col">
                    <div class="inline col-profile">
                        <div class="col-img">
                            <img class="profile-img">
                        </div>
                        <div class="col-txt">
                            <h3 class="profile-title">Nombre Usuario</h3>
                            <p class="profile-p">example@gmail.com</p>
                        </div>
                        <div class="col-mas">
                            <a class="view" href="/usuario.html">ver Perfil <i class="fas fa-arrow-right"></i> </a>
                        </div>
                    </div>

                </section>

                <section class="profile-background inner-col">
                    <div class="inline col-profile">
                        <div class="col-img">
                            <img class="profile-img">
                        </div>
                        <div class="col-txt">
                            <h3 class="profile-title">Nombre Usuario</h3>
                            <p class="profile-p">example@gmail.com</p>
                        </div>
                        <div class="col-mas">
                            <a class="view" href="/usuario.html">ver Perfil <i class="fas fa-arrow-right"></i> </a>
                        </div>
                    </div>

                </section>

            </section>

            <section class="center">
                <div class="inline">
                    <img img class="img-arrow" src="./imgs/left.png" alt="left">
                    <p class="number">5</p>
                    <img img class="img-arrow" src="./imgs/right.png" alt="right">
                </div>
            </section>

        </section>

        <?php
        include "footer.php";
    ?>

    </section>

</body>

</html>