<?php
include "DB.php";

$categories = $database->select("tb_places_category", "*");
date_default_timezone_set("America/Costa_Rica");
$date = date('Y-m-d H:i:s');

function imgs_id($int, $imgs_temp){
    if (isset($imgs_temp[$int])) {
       return $imgs_temp[$int];
    }else{
        return null;
    }
}

/*
function add_images($element){
    if($element) {
        array_push($images, $element);
        return "añadido";
    }
}*/

if($_POST){
    if(isset($_SESSION["id"])){
        if(isset($_FILES["main-image"])){
            //$valid_ext = array("jpeg", "jpg", "png");
            $imgs_temp = array();
            //$main_img = explode(".", $_FILES["main-image"]["name"]);
            //$left_img = explode(".", $_FILES["left-image"]["name"]);
            //$right_img = explode(".", $_FILES["right-image"]["name"]);

            //var_dump($_FILES["main-image"]["name"]);
            //var_dump(add_images($_FILES["main-image"]["name"]));
            //add_images($_FILES["left-image"]["name"]);
            //add_images($_FILES["right-image"]["name"]);
            $images = array();
            $main_img = $_FILES["main-image"];
            $left_img = $_FILES["left-image"];
            $right_img = $_FILES["right-image"];

            if($main_img['name']) {
                array_push($images, $main_img);
            }
            if($left_img['name']) {
                array_push($images, $left_img);
            }
            if($right_img['name']) {
                array_push($images, $right_img);
            }
            
            //$images[0] = $_FILES["main-image"];
            //var_dump($images[0]["tmp_name"]);
            /*
            


            $ready = false;
            if(in_array(end($main_img), $valid_ext) === true){
                $images[0] = $_FILES["main-image"];
                $ready = true;
            }

            if(in_array(end($left_img), $valid_ext) === true){
                $images[1] = $_FILES["left-image"];
            }

            if(in_array(end($right_img), $valid_ext) === true){
                $images[2] = $_FILES["right-image"];
            }

            if($ready){
                */

                
                for ($i = 0; $i < count($images); $i++){
                    $query = $database->query("SELECT tb_imgs.id_imgs, url from BIYx7soDWk.tb_imgs group by tb_imgs.id_imgs order by 1 desc")->fetchAll();
                    $id = $query[0]["id_imgs"] + 1;
                    $imgs_temp[$i] = $id;

                    //var_dump($id);
                    //var_dump($images[$i]["name"]);
                    //var_dump($images[$i]["tmp_name"]);
                    
                    $img = "img-" . $id . $images[$i]["name"];
                    move_uploaded_file($images[$i]["tmp_name"], "imgs/places/" . $img);
                    
                    $database->insert("tb_imgs", [
                         "url" => "./imgs/places/" . $img
                    ]);
                }

                $status = $database->insert("tb_places", [
                     "place_title" => $_POST["title"],
                     "place_description" => $_POST["description"],
                     "place_main_image" => imgs_id(0,$imgs_temp),
                     "place_right_image" => imgs_id(1,$imgs_temp),
                     "place_left_image" => imgs_id(2,$imgs_temp),
                     "place_pub_date" => $date,
                     "place_status" => "1",
                     "id_place_caregory" => $_POST["category"],
                     "id_user" => $_SESSION["id"],
                     "place_location" => $_POST["location"]
                ]);
                 
                 /*
                if(!($status->rowCount()>=0)){//error al insertar en la bace de datos
                    echo "MAMAMOS";
                }
            }else{
                echo "ready false";
            }
            */            
        }
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

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/typografias.css">
    <link rel="stylesheet" href="./css/generico.css">
    <link rel="stylesheet" href="./css/formulario-lugar.css">
    <title>TouristLife</title>
</head>
<body>
    <section class="main">
        <?php
            include "header.php";
        ?>

        <section class="background">
            <div class="box">
                <div class="inner-grid">
                    <div class="title-box">
                        <h3 class="form-title text-20">Registrar lugar</h3>
                    </div>
                    <form action="formulario-lugar.php" method="post" enctype="multipart/form-data" onsubmit="return checkForm(this);">
                        <div class="form-container-grid">
                            <label class="form-text text-16" for="title">Título</label>
                            <input id="title" class="form-input" type="text" name="title" required>
                        </div>
                        <div class="form-container-grid">
                            <label class="form-text text-16" for="location">Localización</label>
                            <input id="location" class="form-input" type="text" name="location" required>
                        </div>
                        <div class="form-container-grid">
                            <label for="description" class="form-text text-16">Descripción</label>
                            <textarea class="form-input-textarea h-13" name="description" id="description" cols="30" rows="8"></textarea required>
                        </div>
                        <div class="form-container-grid">
                            <label class="form-text text-16" for="category">Categoría</label>
                            <select class="form-input-select" name="category" id="category" required>
                                <option value="0">Ninguno</option>
                                <?php
                                for ($i = 0; $i < count($categories); $i++) {
                                    echo "<option value='" . $categories[$i]["id_place_category"] . "'>" . $categories[$i]["place_category"] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-container-grid">
                            <label for="main-image" class="form-text text-16">Archivo</label>
                            <input class="form-input-file" id="main-image" type="file" name="main-image" onchange="showLeftImage();">
                        </div>
                        <div id="container-left-image" class="form-container-grid">
                            <label for="left-image" class="form-text text-16">Opcional</label>
                            <input class="form-input-file" id="left-image" type="file" name="left-image" onchange="showRightImage();">
                        </div>
                        <div id="container-right-image" class="form-container-grid">
                            <label for="right-image" class="form-text text-16">Opcional</label>
                            <input class="form-input-file" id="right-image" type="file" name="right-image">
                        </div>
                        <div class="form-container-grid center">
                            <input id="form-submit" class="form-submit" type="submit" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <?php
            include "footer.php";
        ?>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/validator/13.6.0/validator.min.js"></script>
    <script src="./js/formulario-lugar.js"></script>
</body>
</html>