<!DOCTYPE html>
    <?php
        include "DB.php";
        $top10 = $database->query("SELECT *, (SELECT count(tb_places_likes.id_place)  as total from BIYx7soDWk.tb_places_likes where tb_places.id_place = tb_places_likes.id_place) as 'Likes'  from BIYx7soDWk.tb_places where tb_places.id_place in (Select id_place From (SELECT tb_places_likes.id_place, count(tb_places_likes.id_place)  as total from BIYx7soDWk.tb_places_likes group by tb_places_likes.id_place order by 2 desc limit 10) as t)group by tb_places.id_place order by 11 desc;")->fetchAll();
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
    <link rel="stylesheet" href="./css/index.css">
    <title>TouristLife</title>
</head>

<body>

    <?php 
        include "header.php";
    ?>


    <section class="top-section">
        <div class="center ts-text">
            <h1 class="title">DESCUBRE LO INCREIBLE</h1>
            <div class="center">
                <a class="form-submit" href="/galeria">Galeria</a>
            </div>
        </div>
    </section>

    <section class="body">
        <h2 class="top10 center">Los 10 mas votados</h2>
        <div class="elements">
        
            <div class="element-1 inner-grid">
                <div class="container">
                    <div class="element-img-1" > <img class="element-item-img-1" src="<?php echo  $top10[0]["place_main_image"];?>" alt=""> </div>
                    <div class="element-data-1">
                        <h3 class="element-title-1"><?php echo $top10[0]["place_title"];?></h3>
                        <p class="element-p-1"><?php echo $top10[0]["place_location"];?></p>
                    </div>
                    <div class="element-data-2">
                        <a class="element-a-1" href="../detalle-lugar.php">más <i class="fas fa-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="center">

                <div class="elements-d">
                <?php for ($i=1; $i < count($top10); $i++) { 
                    $img = $database->select("tb_imgs", "*", [
                        "id_imgs" => $top10[$i]["place_main_image"],
                    ]);
                    echo '<div class="element">
                        <div>
                            <div class="element-img"><img class="element-item-img" src="'. $img[0]["url"].'" alt=""></div>
                            <div class="element-data">
                                <h3 class="element-title">'.$top10[$i]["place_title"].'</h3>
                                <p class="element-p">'. $top10[$i]["place_location"].'</p>
                                <a class="element-a" href="./detalle-lugar.php?pg='. $top10[$i]["id_place"].'">más <i class="fas fa-arrow-right"></i>
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