<?php session_start();


include "DB.php";

if($_POST){
    print_r($_POST);

    $email = $_POST["email"];
    $password = $_POST["password"];

    

    $user_found = $database->select("tb_users","*",[
        "email" => $email
    ]);


    if (count($user_found)>0 && md5($password)==$user_found[0]["password"]) {
           
            $_SESSION['id'] = $user_found[0]['id_user'];
            echo session_status();
            header('Location:./usuario.php');
            
    }else{
        session_destroy();
        $valida =false;
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
                    <input class="form-input form-input-inicio email" type="email" name="email"
                        placeholder="correo electronico">
                    <input class="form-input form-input-inicio pss" type="password" name="password"
                        placeholder="contraseña">
                     <?php
                            if(isset($valida)){
                                echo '<input class="form-submit" type="submit" value="Iniciar sesión">';
                                echo '<p class="error">Correo o contraseña incorrectos</p>';
                            }else{
                                echo '<input class="form-submit" type="submit" value="Iniciar sesión">';
                            }
                    ?> 
                   
                    <a class="links" href="./recuperar.php">¿Has olvidado tu contraseña?</a>
                    <a class=" links" href="./registro.php">Registrarse</a>
                </form>


            </div>
        </section>

        <?php
        include "footer.php";
    ?>

    </section>

    <script>
        var nombre =  document.getElementsByClassName("email");
        nombre.addEventListener("keypress", function(){
            nombre.get
        });
    </script>
</body>

</html>