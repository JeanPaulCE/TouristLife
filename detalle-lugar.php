<?php
include "DB.php";
if ($_GET) {
    $place = $database->select("tb_places", "*", [
        "id_place" => $_GET
    ]);
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

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/typografias.css">
    <link rel="stylesheet" href="./css/generico.css">
    <link rel="stylesheet" href="./css/detalle-lugar.css">
    <title>TouristLife</title>
</head>

<body>
    <section class="main">
        <?php
        include "header.php";
        ?>

        <section class="inner-grid">
            <div class="detail-container">
                <div class="elements-d">
                    <div class="inner-image">
                        <?php
                        $url_main = $database->select("tb_imgs", "url", [
                            "id_imgs" => $place[0]["place_main_image"]
                        ]);

                        echo "<img class='inner-image' src='" . $url_main[0] . "' alt='imagen'>";
                        ?>
                        <!--<img class="inner-image" src="./imgs/prueba-detalle.jpg" alt="imagen">-->
                    </div>
                    <div class="inner-text">
                        <?php
                        echo "<h3 class='detail-title text-16'>" . $place[0]["place_title"] . "</h3>";
                        echo "<p class='detail-description text-16'>" . $place[0]["place_location"] . "</p>";
                        echo "<p class='detail-description text-16'>" . $place[0]["place_description"] . "</p>";
                        ?>
                    </div>
                </div>
                <div class="inner-row">
                    <?php
                    $name_user = $database->select("tb_users", "username", [
                        "id_user" => $place[0]["id_user"]
                    ]);
                    $name_category = $database->select("tb_places_category", "place_category", [
                        "id_place_category" => $place[0]["id_place_caregory"]
                    ]);
                    echo "<p class='detail-bottom text-16'>" . $name_user[0] . "</p>";
                    echo "<p class='detail-bottom text-16'>" . $name_category[0] . "</p>";
                    echo "<p class='detail-bottom text-16'>" . $place[0]["place_pub_date"] . "</p>";
                    ?>
                    <!--
                        <p class="detail-bottom text-16">usuario</p>
                        <p class="detail-bottom text-16">categoria</p>
                        <p class="detail-bottom text-16">dd/mm/aaaa</p>
                        -->
                    <div class="detail-bottom text-16">
                        <div class="inner-like">
                            <p class="center-vertical mr-02">1</p>
                            <input id="like" type="checkbox">
                            <label for="like" class="center-vertical">
                                <i class="fas fa-heart"></i>
                            </label>
                        </div>
                    </div>
                </div>

            </div>
            <p class="center"><a class="links text-20" href="#">Seguir viendo</a></p>
        </section>

        <?php
        include "footer.php";
        ?>
    </section>
</body>

</html>