<?php
include "DB.php";

$valida=2;

if($_POST){
    $user = $_POST["user"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $user_found = $database->select("tb_users","username",[
        "username" => $user
    ]);

    $email_found = $database->select("tb_users","email",[
        "email" => $email
    ]);

    

    if (count($user_found)>0) {
        $valida =0;

    }else if(count($email_found)>0){
        $valida =1;
    }else{
        $database->insert("tb_users", [
            "username" => $user,
            "email" => $email,
            "password" => md5($password)
        ]);

        $user_found = $database->select("tb_users","*",[
            "email" => $email
        ]);

        $_SESSION['id'] = $user_found[0]['id_user'];
            header('Location:./usuario.php');
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
                    <input class="form-input" type="text" name="user" placeholder="nombre de usuario" required>
                    <input class="form-input" type="email" name="email" placeholder="correo electronico" required>
                    <input class="form-input password" id="password2" type="password" name="password" placeholder="contraseña" onkeyup="check();" required>
                    <input class="form-input confirm_password" id="confirm_password2" type="password" name="confirm_password" placeholder="confirmar contraseña" onkeyup="check();" required>
                    <input class="form-submit" id="buttom" type="submit" value="Registrar">

                    <?php
                            if($valida==0){
                                echo '<p class="error">Usuario ya registrado</p>';
                            }else if($valida==1){
                                echo '<p class="error">Correo ya registrado</p>';
                            }
                    ?>
                </form>
            </div>
        </section>

        <?php
        include "footer.php";
    ?>

    </section>

    <script>
        var red=false;
        var check = function() {
            document.getElementById('buttom').disabled=true;
        
         if (document.getElementById('confirm_password2').value == document.getElementById('password2').value) {
                document.getElementById('buttom').disabled=false;
                if(red){
                    document.getElementById('confirm_password2').className = " form-input confirm_password ";
                    red=false;
                }
            } else {
                    if(!red){
                        document.getElementById('confirm_password2').className += " outline-red ";
                        red=true;
                    }
                }
        }

    </script>

</body>

</html>