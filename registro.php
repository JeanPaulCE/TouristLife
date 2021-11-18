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
    <link rel="stylesheet" href="./css/registro.css">
    <title>registrarse</title>
</head>

<body>
    <section>
    <?php 
        include "header.php";
    ?>

        <section class="background background-register">
            <div class="box center">
                <form class="center" action="registro.php" method="post">
                    <h3 class=" form-label">Crear Cuenta</h3>
                    <input class="form-input" type="text" name="user" placeholder="nombre de usuario">
                    <input class="form-input" type="email" name="email" placeholder="correo electronico">
                    <input class="form-input" type="password" name="password" placeholder="contraseña">
                    <input class="form-input" type="password" name="confirm-password" placeholder="confirmar contraseña">
                    <input class="form-submit" type="submit" value="Registrar">
                </form>
            </div>
        </section>

        <?php
        include "footer.php";
    ?>

    </section>
</body>

</html>