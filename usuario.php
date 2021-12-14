<?php
    include "DB.php";

    $MOSTRAR = array();

    $user_found = $database->select("tb_users","*",[
        "id_user" => $_SESSION["id"]
    ]);

    $publicaciones = $database->select("tb_places","*",[
        "id_user" => $_SESSION["id"]
    ]);

    if(count($publicaciones)>0){

        if ($_GET) {

            $INICIO = (intval($_GET["pag"])-1)*5;
    
        } else {
            $INICIO = 0;
        }
        
        if(count($publicaciones)-$INICIO<5){

            $aux=count($publicaciones)-$INICIO;

        }else{

            $aux = 5;

        }

        for ($i=0; $i < $aux; $i++) { 
            

                $MOSTRAR[$i] = $publicaciones[$INICIO+$i];

        }

    }

    $MAX = round(count($publicaciones)/5, 0, PHP_ROUND_HALF_UP);
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
                        <h4 class="text-name"><?php echo $user_found[0]["username"];?></h4>
                        <p class="text-mail"><?php echo $user_found[0]["email"];?></p>
                    </div>
                </div>
                <div>
                <?php
                
                $admin = $database->select("tb_users","*",[
                    "id_user" => $_SESSION["id"],
                ]);
            
                if(($admin[0]["admin"]=='1')){
            
                    echo'<a class="btn" href="./administracion-personas.php">Administración</a>';
                }
                
                ?> 
                    <a class="btn" href="./formulario-lugar.php">Nueva Publicación</a>
                </div>
            </section>

            <section>
                
                <?php 
                for ($i=0; $i < count($MOSTRAR); $i++) {

                    $img = $database->select("tb_imgs", "*", [
                        "id_imgs" => $publicaciones[$i]["place_main_image"],
                        ]);


                    echo '
                            <section class="site-background inner-col">
                                <div class="inline card">
                                 <div class="col-img">
                                    <img class="site-img" src="'.$img[0]["url"].'">
                                 </div>
                                 <div class="col-txt">
                                    <h3 class="element-title">'.$MOSTRAR[$i]["place_title"].'</h3>
                                    <p class="element-p">'. $MOSTRAR[$i]["place_location"].'</p>
                                 </div>
                                 <div class="col-mas">';

                    if ($MOSTRAR[$i]["place_status"] == "0"){
                        echo '
                                    <p class="element-p">no verificado</p>';
                        

                    }else if (!($MOSTRAR[$i]["place_status"] == "1")){
                        echo '
                                    <p class="element-p">no aprovado</p>';

                            }

                        echo ' 
                        <a class="element-a" href="./detalle-lugar.php?pg='. $MOSTRAR[$i]["id_place"].'">más <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                </section>';

                    }?>
                

            </section>

            <section class="center">
                <div class="inline">

                    <img class="img-arrow cursor" src="./imgs/left.png" alt="left" onclick="back();">
                    <p class="number" id="pagina">1</p>
                    <img class="img-arrow cursor" src="./imgs/right.png" alt="right" onclick="next();">

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
                    window.location.href = "usuario.php?pag="+(pag_actual+1);
                }

            }

            let back = function() {

                if(pag_actual > 1)
                {
                    window.location.href = "usuario.php?pag="+(pag_actual-1);

            }
            }
            


    </script>

</body>

</html>