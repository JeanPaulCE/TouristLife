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
                        $url_right = $database->select("tb_imgs", "url", [
                            "id_imgs" => $place[0]["place_right_image"]
                        ]);
                        $url_left = $database->select("tb_imgs", "url", [
                            "id_imgs" => $place[0]["place_left_image"]
                        ]);

                        $class_width = "w-100";
                        if (count($url_right) > 0) {
                            $class_width = "w-200";
                        }
                        if (count($url_left) > 0) {
                            $class_width = "w-300";
                        }
                        echo "<div id='slider' class='slider " . $class_width . "'>";

                        echo "<div class='w-100'>";
                        echo "<img id='main-image' class='slider-image' src='" . $url_main[0] . "' alt='main-image'>";
                        echo "</div>";
                        if (count($url_right) > 0) {
                            echo "<div class='w-100'>";
                            echo "<img class='slider-image' src='" . $url_right[0] . "' alt='right-image'>";
                            echo "</div>";
                        }
                        if (count($url_left) > 0) {
                            echo "<div class='w-100'>";
                            echo "<img class='slider-image' src='" . $url_left[0] . "' alt='left-image'>";
                            echo "</div>";
                        }

                        echo "</div>";
                        ?>
                        
                        <i id="button-left" class="fas fa-angle-left slider-button-left"></i>

                        <?php
                        if (count($url_right) > 0) {
                            echo "<i id='button-right' class='fas fa-angle-right slider-button-right'></i>";
                        }
                        ?>
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

                    <div class="detail-bottom text-16">
                        <div class="inner-like">
                            <?php
                            $votes = $database->count("tb_places_likes", [
                                "id_place" => $place[0]["id_place"]
                            ]);

                            $hasVoted = [];
                            if (isset($_SESSION["id"])) {
                                $hasVoted = $database->select("tb_places_likes", "*", [
                                    "id_place" => $place[0]["id_place"],
                                    "id_user" => $_SESSION["id"]
                                ]);
                            }
                            if (count($hasVoted) > 0) {
                                $class = "fas fa-heart like-click";
                                $click = "onclick='dislike(this.id);'";
                            } 
                            else {
                                $class = "fas fa-heart like";
                                $click = "onclick='like(this.id);'";
                            }
                            echo "<p id='votes" . $place[0]["id_place"] . "' class='center-vertical mr-02'>" . $votes . "</p>";
                            echo "<i id='" . $place[0]["id_place"] . "' class='" . $class . "'" . $click . "></i>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <p class="center"><a class="links text-20" href="./galeria.php">Seguir viendo</a></p>
        </section>

        <?php
        include "footer.php";
        ?>
    </section>
    <script src="./js/slider.js"></script>
    <script src="./js/detalle-lugar.js"></script>
</body>

</html>