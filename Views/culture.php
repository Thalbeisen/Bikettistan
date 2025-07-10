<?php
    $pageTitle = 'Bikettistan'
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?= $pageTitle ?> - Culture</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="../Assets/CSS/style.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg" id="navStyle">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">
                    <img src="../Assets/IMG/Branding.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    Le Bikettistan
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="./mainPage.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./history.php">Histoire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./gov.php">Gouvernement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./culture.php">Culture</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <img src="../Assets/IMG/cultback.jpg" id="cultBack" />
            <div id="cultContainer">
                <div class="row">
                    <div class="col">
                        <h1 id="cultText">Culture du Bikettistan</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col cultContent">
                       <p>La grace de suno nous a touché avec l'hymne du bikettistan</p>
                        <audio controls src="../Assets/SND/Hymn.mp3"></audio>
                        <p>La version audio est téléchargeable</p>
                        <p>Version longue</p>
                        <audio controls src="../Assets/SND/Hymn_long.mp3"></audio>
                        <br><br><br><br><br>
                        <h1>Vous pardonnerez mais le conseiller en humour en a eu plein le cul de rusher et se casser le fion pour cette vanne poussée beaucoup trop loin alors je ne fixerais pas les bugs voila</h1>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</html>