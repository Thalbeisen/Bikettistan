<?php
    $pageTitle = 'Bikettistan'
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?= $pageTitle ?> - Notre Histoire</title>
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
                        <a class="nav-link active" aria-current="page" href="./culture.php">Histoire</a>
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
        <div class="container-fluid">
            <img src="../Assets/IMG/backhistory.jpeg" id="historyBack" />
            <div id="historyContainer">
            <div class="row">
                <div class="col">
                    <h1 id="historyText">Histoire du bikettistan</h1>
                </div>
            </div>
            <div class="row">
                <div class="col historyTextBack">
                    <h2 class="govH2">Résumé</h2>
                    <p class="govP">Il était une fois, en l'an 2025 après Twitch, une streameuse nommée BiketteOx qui, un soir de fatigue et de bière trop éventée, déclara en live:<br>
                    <q><b><i>Ici, c'est plus une chaîne, c'est un ÉTAT!</b></i></q> Ce moment, capturé par un bot buggé et un spectateur insomniaque, devint viral dans un coin obscur de Discord. Le lendemain, le Bikettistan était né.
                    <br>Un pays sans frontières, sans logique, mais avec un drapeau fait sous chatGPT en 2 secondes!</p>
                    <p class="govP">Le chat éleva Bikette au rang de magnanime dirigeante, son premier décret, <q><b><i>personne ne parle de Fortnite dans le chat!</b></i></q>
                    <br>Elle fut rapidement rejointe par SanaHellCat, autoproclamée mairesse suprême, propriétaire d'un arbre à chats de 3 étages, élevé au rang de monument national
                    <br>Elle est assistée dans la vie gouvernementale par sa fidèle assistante Loki, se reposant le plus souvent sur un coussin sacré.</p>
            </div>
</div>
            <div class="row">
                <div class="col historyTextBack">
                    <h2 class="govH2">Le reste du gouvernement</h2>
                    <p class="govP">Mais aucun gouvernement n'est complet sans ministres ou conseillers:
                        <br><ul>
                            <li>DeimossBalthazar mystérieux personnage n'apparaissant qu'en PNG flou, fut nommé ministre de l'obscurité et des pseudos trop longs.</li>
                            <li>PaniniPanonoPanononanonani, initialement un bug de saisie clavier, obtint le ministère des routes absurdes et des noms impossibles à taguer sur Discord.</li>
                            <li>Thitiroux, connu pour faire rire même les bots muets, devint Conseiller Humoristique. Il est à l'origine de la <q><b><i>loi sur les blagues nulles mais obligatoires pendant chaque stream</b></i></q>.</li>
                            <li>Enfin, Pikashoup, experte de la gentillesse explosive, hérita du Ministère de la Mignonnerie et des crises de rire en vocal.</li>
                        </ul></p>
                </div>
            </div>
            <div class="row">
                <div class="col historyTextBack">
                    <h2 class="govH2">La constitution du Bikettistan</h2>
                    <p class="govP">Elle est simplissime et tient sur un post-it (le bloc de 100 feuilles coute 0,56€ sur amazon actuellement)
                        <br><ul>
                            <li>Tout stream est une réunion officielle.</li>
                            <li>Toute rage sur un jeu devient une décision politique.</li>
                            <li>Les modos sont les gardiens du screamer ultime</li>
                            <li>Le chat a le droit de grève... mais la dirigeante magnanime l'ignore.</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</html>