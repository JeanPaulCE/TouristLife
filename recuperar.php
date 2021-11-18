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
    <link rel="stylesheet" href="./css/recuperar.css">
    <title>recuperar</title>

</head>

<body>
<?php 
        include "header.php";
    ?>

    <section class="background background-recover">l
        <div class="box">
            <form class="center" action="./administracion.html" method="get">
                <h3 class=" form-label">Recuperar Cuenta</h3>
                <label for="Ingresa-correo" class="links text-recover">Ingresa tu correo electronico <br> de
                    recuperación</label>
                <input class="form-input" type="email" name="email" placeholder="correo electronico">
                <input class="form-submit" type="submit" value="Enviar">
            </form>
        </div>
    </section>
    
    <?php
        include "footer.php";
    ?>


</body>

</html>