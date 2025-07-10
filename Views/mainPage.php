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
                        <a class="nav-link active" aria-current="page" href="./mainPage.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./history.php">Histoire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./gov.php">Gouvernement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./culture.php">Culture</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid" id="mainPageBack">
            <div class="row" id="picContainer">
            <img src="../Assets/IMG/Branding.png" id="mainPageBranding" />
</div>
<div class="row">
            <h1 id="mainText">Bienvenue sur ce site institutionnel de la <strike>dictature</strike> république autoproclamée du bikettistan</h1>
            <h2 id="mainSubText">Pour naviguer, servez vous du menu au dessus</h2>
        </div>
</div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</html>