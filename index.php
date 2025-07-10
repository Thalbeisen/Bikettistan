<?php
    $pageTitle = 'Bikettistan'
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?= $pageTitle ?> - Accueil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="./Assets/CSS/style.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body id="landingStyle">
        <video id="landingVid" autoplay muted loop>
            <source src="./Assets/VID/INTRO.mp4" type="video/mp4" />
            Votre navigateur ne supporte pas la vidéo HTML5!
        </video>
        <div class="container-fluid" id="landingTextButtonBack">
            <div class="row">
                <div class="col">
                    <h1 id="landingText">Bienvenue au Bikettistan</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="./Views/mainPage.php" class="btn btn-primary" id="landingBtn">Entrer au bikettistan</a>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</html>