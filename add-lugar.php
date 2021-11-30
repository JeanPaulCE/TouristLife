<?php
include "DB.php";

date_default_timezone_set("America/Costa_Rica");
$date = date('Y-m-d H:i:s');

function imgs_id($int, $imgs_temp){
    if (isset($imgs_temp[$int])) {
       return $imgs_temp[$int];
    }else{
        return null;
    }
}

if($_POST){
    if(isset($_SESSION["id"])){
        if(isset($_FILES["main-image"])){
            $imgs_temp = array();
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
            
            for ($i = 0; $i < count($images); $i++){
                $query = $database->query("SELECT tb_imgs.id_imgs, url from BIYx7soDWk.tb_imgs group by tb_imgs.id_imgs order by 1 desc")->fetchAll();
                $id = $query[0]["id_imgs"] + 1;
                $imgs_temp[$i] = $id;

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
                
            header('Location:./usuario.php');
        }
    }
}

?>