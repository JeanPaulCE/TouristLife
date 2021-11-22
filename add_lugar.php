<?php
include "DB.php";

date_default_timezone_set("America/Costa_Rica");
$date = date('Y-m-d H:i:s');

if($_POST){
    if(isset($_SESSION["id"])){
        if(isset($_FILES["main-image"])){
            $valid_ext = array("jpeg", "jpg", "png");
            $main_img = explode(".", $_FILES["main-image"]["name"]);
            $left_img = explode(".", $_FILES["left-image"]["name"]);
            $right_img = explode(".", $_FILES["right-image"]["name"]);
            

            if(in_array(end($main_img), $valid_ext) === false){
                echo "Main";
            }
            else if(in_array(end($left_img), $valid_ext) === false){
                echo "Left";
            }
            else if(in_array(end($right_img), $valid_ext) === false){
                echo "Right";
            }
            else {
                move_uploaded_file($file_tmp, "uploads/".$img);
            }
            /*
            if(empty($errors)){
                $img = "places-img-".generateRandomString().".".$file_ext;
                move_uploaded_file($file_tmp, "uploads/".$img);

                $database->insert("tb_places", [
                    "id_place_category" => $_POST["pcategory"],
                    "place_title" => $_POST["ptitle"],
                    "place_description" => $_POST["pdescription"],
                    "place_main_image" => $img,
                    "place_right_image" => $img,
                    "place_left_image" => $img,
                    "place_pub_date" => $date,
                    "place_status" => 0
                ]);

            }
            */
        }
    }
}

?>