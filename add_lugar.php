<?php
include "DB.php";

date_default_timezone_set("America/Costa_Rica");
$date = date('Y-m-d H:i:s');

$imgs_temp = array();

function imgs_id($int){
    echo isset($imgs_temp[$int]);
    if (isset($imgs_temp[$int])) {
       return $imgs_temp[$int];
    }else{
        return "aaa";
    }
}

if($_POST){
    if(isset($_SESSION["id"])){
        if(isset($_FILES["main-image"])){
            $valid_ext = array("jpeg", "jpg", "png");
            $images = array();
            $main_img = explode(".", $_FILES["main-image"]["name"]);
            $left_img = explode(".", $_FILES["left-image"]["name"]);
            $right_img = explode(".", $_FILES["right-image"]["name"]);
            
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
                
                for ($i = 0; $i < count($images); $i++){
                    $consulta = $database->query("SELECT tb_imgs.id_imgs, url from BIYx7soDWk.tb_imgs group by tb_imgs.id_imgs order by 1 desc")->fetchAll();
                    $id = $consulta[0]["id_imgs"] + 1;
                    $imgs_temp[$i] = $id;
                    $img = "img-" . $id . $images[$i]["name"];
                    move_uploaded_file($images[$i]["tmp_name"], "imgs/places/" . $img);
                    
                    $database->insert("tb_imgs", [
                        "url" => "./imgs/places/" . $img
                    ]);
                }
                echo imgs_id(0);
                echo imgs_id(1);
                echo imgs_id(2);

                $database->insert("tb_places", [
                    "place_title" => $_POST["title"],
                    "place_description" => $_POST["description"],
                    "place_main_image" => imgs_id(0),
                    "place_right_image" => imgs_id(1),
                    "place_left_image" => imgs_id(2),
                    "place_pub_date" => $date,
                    "place_status" => "1",
                    "id_place_caregory" => $_POST["category"],
                    "id_user" => $_SESSION["id"],
                    "place_location" => $_POST["location"]
                ]);
                
            }
            
        }
    }
}

?>