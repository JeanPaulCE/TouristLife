<?php
    include "DB.php";

    if(isset($_SESSION['id'])){
        if(isset($_SERVER["CONTENT_TYPE"])){
            $contentType = $_SERVER["CONTENT_TYPE"];

            if($contentType === "application/json"){
                $content = trim(file_get_contents("php://input"));
                $decode = json_decode($content, true);

                $database->insert("tb_places_likes", [
                    "id_place" => $decode["place_id"],
                    "id_user" => $_SESSION["id"]
                ]);
                
                echo json_encode(200);
            }
        }
    }
    else {
        echo json_encode(401);
    }
?>