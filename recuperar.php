<?php
include "DB.php";

if($_POST){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $new_password = $_POST["new_password"];


    $email_found = $database->select("tb_users","*",[
        "email" => $email
    ]);


    if (count($email_found)>0 && md5($password)==$email_found[0]["password"]) {
        $database->update("tb_users",[
            "password" => md5($new_password)
        ],[

            "email"=> $_POST["email"]
        ]);
        session_destroy();
        header('Location:./inicio-sesion.php');
    }else{
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
    <link rel="stylesheet" href="./css/recuperar.css">
    <title>registrarse</title>
</head>

<body>
    <section>
    <?php 
        include "header.php";
    ?>

        <section class="background background-recover">
            <div class="box center">
                <form class="center" action="recuperar.php" method="post">
                    <h3 class=" form-label">Cambiar contraseña</h3>
                    <input class="form-input" id="i" type="email" name="email" placeholder="correo electronico" required>
                    <input class="form-input password" type="password" name="password" placeholder="contraseña actual" required>
                    <input class="form-input new_password" id="new_password" type="password" name="new_password" placeholder="nueva contraseña" onkeyup="check();" required>
                    <input class="form-input confirm_password" id="confirm_password" type="password" name="confirm_password" placeholder="confirmar nueva contraseña" onkeyup="check();" required>
                    <input class="form-submit" id="buttom" type="submit" value="Actualizar">
                    <p class="message" id="message"></p>

                    <?php
                            if(isset($valida)){
                                echo '<p class="error">Correo o contraseña incorrectos</p>';
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
        
         if (document.getElementById('new_password').value == document.getElementById('confirm_password').value) {
                document.getElementById('buttom').disabled=false;
                if(red){
                    document.getElementById('confirm_password').className = " form-input confirm_password ";
                    red=false;
                }
            } else {
                    if(!red){
                        document.getElementById('confirm_password').className += " outline-red ";
                        red=true;
                    }
                }
        }

    </script>

</body>

</html>