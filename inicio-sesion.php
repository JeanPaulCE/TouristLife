<?php
include "DB.php";

if($_POST){
    print_r($_POST);

    $email = $_POST["email"];
    $password = $_POST["password"];

    $password_found = $database->select("tb_users","password",[
        "password" => $password
    ]);

    $email_found = $database->select("tb_users","email",[
        "email" => $email
    ]);


    if (count($email_found)>0 && count($password_found)>0) {
            echo "inicio Sesion correcto";
    }else{
        echo "fallo inicio sesion";
    } 
}
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
    <link rel="stylesheet" href="./css/inicioSesion.css">
    <title>iniciarSesion</title>

</head>

<body>
    <section>
    <?php 
        include "header.php";
    ?>
        <section class="background background-login">
            <div class="box">
                <form class="center" action="inicio-sesion.php" method="post">
                    <h3 class=" form-label">Iniciar Sesión</h3>
                    <input class="form-input form-input-inicio" type="email" name="email"
                        placeholder="correo electronico">
                    <input class="form-input form-input-inicio" type="password" name="password"
                        placeholder="contraseña">
                    <input class="form-submit" type="submit" value="Iniciar sesión">
                    <a class="links" href="./recuperar.php">¿Has olvidado tu contraseña?</a>
                    <a class=" links" href="./registro.php">Registrarse</a>
                </form>


            </div>
        </section>

        <?php
        include "footer.php";
    ?>

    </section>
</body>

</html>