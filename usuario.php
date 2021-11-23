<?php
    include "DB.php";
   

?>

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
    
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/typografias.css">
    <link rel="stylesheet" href="./css/generico.css">
    <link rel="stylesheet" href="./css/usuario.css">
    <title>usuario</title>
</head>

<body>

    <?php 
        include "header.php";
    ?>

    <section class="background background-usuario">

        <section class="banner">
            
            <section class="profile inner-col inner-profile">
                <div class="inline">
                    <img img class="img-profile" src="./imgs/profile.png" alt="profile">
                    <div>
                        <h4 class="text-name">Nombre Usuario</h4>
                        <p class="text-mail">example@gmail.com</p>
                    </div>
                </div>
                <div>
                    <a class="btn" href="./formulario-lugar.php">Nueva Publicación</a>
                </div>
            </section>

            <section>

                <section class="site-background inner-col">
                    <div class="inline card">
                        <div class="col-img">
                            <img class="site-img">
                        </div>
                        <div class="col-txt">
                            <h3 class="element-title">La selva de Jaco</h3>
                            <p class="element-p">categoria</p>
                        </div>
                        <div class="col-mas">
                            <a class="element-a-1" href="./detalle-lugar.php">más <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                </section>

                <section class="site-background inner-col">
                    <div class="inline card">
                        <div class="col-img">
                            <img class="site-img">
                        </div>
                        <div class="col-txt">
                            <h3 class="element-title">La selva de Jaco</h3>
                            <p class="element-p">categoria</p>
                        </div>
                        <div class="col-mas">
                            <a class="element-a-1" href="./detalle-lugar.php">más <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                </section>

                <section class="site-background inner-col">
                    <div class="inline card">
                        <div class="col-img">
                            <img class="site-img">
                        </div>
                        <div class="col-txt">
                            <h3 class="element-title">La selva de Jaco</h3>
                            <p class="element-p">categoria</p>
                        </div>
                        <div class="col-mas">
                            <a class="element-a-1" href="./detalle-lugar.php">más <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                </section>

                <section class="site-background inner-col">
                    <div class="inline card">
                        <div class="col-img">
                            <img class="site-img">
                        </div>
                        <div class="col-txt">
                            <h3 class="element-title">La selva de Jaco</h3>
                            <p class="element-p">categoria</p>
                        </div>
                        <div class="col-mas">
                            <a class="element-a-1" href="./detalle-lugar.php">más <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                </section>

                <section class="site-background inner-col">
                    <div class="inline card">
                        <div class="col-img">
                            <img class="site-img">
                        </div>
                        <div class="col-txt">
                            <h3 class="element-title">La selva de Jaco</h3>
                            <p class="element-p">categoria</p>
                        </div>
                        <div class="col-mas">
                            <a class="element-a-1" href="./detalle-lugar.php">más <i class="fas fa-arrow-right"></i>
                            </a>
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