<!DOCTYPE html>
<?php
        include "DB.php";
        $publicaciones = $database->select("tb_places", "*", [
            "place_status" => "1",
            "id_place_caregory"=>3
            
        ]);
    
    ?>
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
    <link rel="stylesheet" href="./css/categorias.css">
    <link rel="stylesheet" href="./css/ciudad.css">
    <title>TouristLife</title>
</head>

<body>
    <?php 
        include "header.php";
    ?>

    <section class="top-section">
        <div class="filtro"></div>
        <div class="center ts-text">
            <h1 class="title center">Ciudad</h1>

        </div>

    </section>

    <section class="body">
        <div class="elements">
            <div class="center">
                <div class="elements-d">
                    <?php for ($i=0; $i < count($publicaciones); $i++) { 
                        $img = $database->select("tb_imgs", "*", [
                        "id_imgs" => $publicaciones[$i]["place_main_image"],
                        ]);
                        
                        echo '<div class="element">
                            <div>
                                <div class="element-img"><img class="element-item-img" src="'.  $img[0]["url"].'" alt=""></div>
                                <div class="element-data">
                                    <h3 class="element-title">'.$publicaciones[$i]["place_title"].'</h3>
                                    <p class="element-p">'. $publicaciones[$i]["place_location"].'</p>
                                    <a class="element-a" href="./detalle-lugar.php?pg='. $publicaciones[$i]["id_place"].'">m??s <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>';
                    }?>
                </div>
            </div>




        </div>
    </section>

    <?php
        include "footer.php";
    ?>


</body>

</html>