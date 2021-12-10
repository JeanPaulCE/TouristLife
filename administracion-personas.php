<?php
    include "DB.php";

    $MOSTRAR = array();

    $user_found = $database->select("tb_users", "*", );

    if(count($user_found)>0){

        if ($_GET) {

            $INICIO = (intval($_GET["pag"])-1)*5;
    
        } else {
            $INICIO = 0;
        }

        if(count($user_found)-$INICIO<5){

            $aux=count($user_found)-$INICIO;

        }else{

            $aux = 5;

        }

        for ($i=0; $i < $aux; $i++) { 
            

                $MOSTRAR[$i] = $user_found[$INICIO+$i];

        }

    }

    $MAX = round(count($user_found)/5, 0, PHP_ROUND_HALF_UP);

?>

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

            <?php 
                for ($i=0; $i < count($MOSTRAR); $i++) {

                    echo '

                <section class="profile-background inner-col">
                    <div class="inline col-profile">
                        <div class="col-img">
                            <img class="profile-img">
                        </div>
                        <div class="col-txt">
                            <h3 class="profile-title">'.$MOSTRAR[$i]["username"].'</h3>
                            <p class="profile-p">'. $MOSTRAR[$i]["email"].'</p>
                        </div>
                        <div class="col-mas">
                            <a class="view" href="/usuario.php">ver Perfil <i class="fas fa-arrow-right"></i> </a>
                        </div>
                    </div>

                </section>';
            }?>

            </section>

            <section class="center">
                <div class="inline">
                    <img class="img-arrow" src="./imgs/left.png" alt="left" onclick="back();">
                    <p class="number" id="pagina">1</p>
                    <img class="img-arrow" src="./imgs/right.png" alt="right" onclick="next();">
                </div>
            </section>

        </section>

        <?php
        include "footer.php";
    ?>

    </section>

    <script>

        let max_actual = <?php echo intval($MAX)  ?>;
        let pag_actual = <?php 
            
            if ($_GET){
                echo intval($_GET["pag"]);

            }else{

                echo intval(1);

            } ?>;

                document.getElementById("pagina").innerHTML=pag_actual;

            let next = function() {
                    
                if(pag_actual < max_actual)
                {
                    window.location.href = "administracion-personas.php?pag="+(pag_actual+1);
                }

            }

            let back = function() {

                if(pag_actual > 1)
                {
                    window.location.href = "administracion-personas.php?pag="+(pag_actual-1);

            }
            }
            


    </script>

</body>

</html>