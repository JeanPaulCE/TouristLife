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
    <link rel="stylesheet" href="./css/detalle-lugar.css">
    <title>TouristLife</title>
</head>

<body>
<?php 
        include "header.php";
    ?>
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

        <?php
        include "footer.php";
    ?>

    </section>
</body>

</html>