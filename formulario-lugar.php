
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
    <link rel="stylesheet" href="./css/formulario-lugar.css">
    <title>TouristLife</title>
</head>

<body>

<?php 
        include "header.php";
    ?>


    <section class="main">

        <section class="background">
            <div class="box">
                <div class="inner-grid">
                    <div class="title-box">
                        <h3 class="form-title text-20">Registrar lugar</h3>
                    </div>
                    <form action="" method="">
                        <div class="form-container-grid">
                            <label class="form-text text-16" for="title">Título</label>
                            <input id="title" class="form-input" type="text" name="title">
                        </div>
                        <div class="form-container-grid">
                            <label for="description" class="form-text text-16">Descripción</label>
                            <textarea class="form-input-textarea h-13" name="description" id="description" cols="30"
                                rows="8"></textarea>
                        </div>
                        <div class="form-container-grid">
                            <label class="form-text text-16" for="category">Categoría</label>
                            <select class="form-input-select" name="category" id="category">
                                <option value="sj">Ninguno</option>
                                <option value="pun">Playa</option>
                                <option value="her">Montaña</option>
                                <option value="her">Ciudad</option>
                            </select>
                        </div>
                        <div class="form-container-grid">
                            <label for="main-image" class="form-text text-16">Archivo</label>
                            <input class="form-input-file" id="main-image" type="file" name="main-image">
                        </div>
                        <div class="form-container-grid">
                            <label for="left-image" class="form-text text-16">Opcional</label>
                            <input class="form-input-file" id="left-image" type="file" name="left-image">
                        </div>
                        <div class="form-container-grid">
                            <label for="right-image" class="form-text text-16">Archivo</label>
                            <input class="form-input-file" id="right-image" type="file" name="right-image">
                        </div>
                        <div class="form-container-grid center">
                            <input class="form-submit" type="submit" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <?php
        include "footer.php";
    ?>

    </section>
</body>

</html>