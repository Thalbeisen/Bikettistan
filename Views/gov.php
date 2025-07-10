<?php
    $pageTitle = 'Bikettistan'
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?= $pageTitle ?> - Gouvernement</title>
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
                        <a class="nav-link active" aria-current="page" href="./gov.php">Gouvernement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./culture.php">Culture</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="govContainer">
        <div id="govPage">
        <img src="../Assets/IMG/govback.jpg" id="govBack" />
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1 id="landingText">Membres du gouvernement du Bikettistan</h1>
                </div>
            </div>
            <div class="row">
                <p>Notre équipe gouvernementale est si soudée qu'ils se perdent tous ensemble !</p>
            </div>
            <div class="row">
                <ul class="govTeam">
                    <li class="member ruler">
                        <div class="govPic">
                            <img src="../Assets/IMG/BiketteOx.png" />
                        </div>
                        <div class="govDesc">
                            <h3>BiketteOx</h3>
                            <p><br><a href="https://www.twitch.tv/biketteox" target="_blank">Le Twitch de notre magnanime dirigeante</a><br><a href="https://discord.com/invite/dR4EaMt6fj" target="_blank">Le discord du bikettistan</a></p><br>
                            <p>Basiquement, dirigeante suprême!
                        </div>
                    </li>
                    <li class="member mayor">
                        <div class="govPic">
                            <img src="../Assets/IMG/SanaHellCat.png" />
                        </div>
                        <div class="govDesc">
                            <h3>SanaHellCat</h3>
                            <p><br><a href="https://www.twitch.tv/sanahellcat" target="_blank">Le twitch de la mairesse suprême</a><br><a href="https://discord.gg/rTF5pZwNYD" target="_blank">L'arbre à chats de la mairesse</a></p><br>
                            <p>Notre mairaisse suprême! Avé SanaHellCat!</p>
                        </div>
                    </li>
                   <li class="member stratTaste">
                        <div class="govPic">
                            <img src="../Assets/IMG/joakim.webp" />
                        </div>
                        <div class="govDesc">
                            <h3>DeimossBalthazar</h3>
                            <p><br><br></p><br>
                            <p>Conseiller en stratégie militaire et bon goût</p>
                        </div>
                    </li>
                    <li class="member roadManager">
                        <div class="govPic">
                             <img src="../Assets/IMG/10151.webp" />
                        </div>
                        <div class="govDesc">
                            <h3>Panomanisk</h3>
                            <p><br><br></p><br><br>
                            <p>Sa sagesse n'a d'égale que sa barbe fournie</p>
                        </div>
                    </li>
                    <li class="member humorCounselor">
                        <div class="govPic">
                            <img src="../Assets/IMG/Thitiroux.png" />
                        </div>
                        <div class="govDesc">
                            <h3>Thitiroux</h3>
                            <p><br><a href="https://www.twitch.tv/thitiroux" target="_blank">Le twitch du conseiller humoristique</a><br><a href="https://discord.gg/XzcVdQBUTG" target="_blank">La tribu du conseiller humoristique</a></p><br>
                            <p>Sa sympathitude n'a d'égale que son humour</p>
                        </div>
                    </li>
                    <li class="member cuteCounselor">
                        <div class="govPic">
                            <img src="../Assets/IMG/Pikashoup.png" />
                        </div>
                        <div class="govDesc">
                            <h3>Pikashoup</h3>
                            <p><br><br><br><a href="https://www.twitch.tv/pikashoup" target="_blank">Le twitch de la conseillère en mignonnerie</a></p><br><br>
                            <p>Ses crochets et son expérience en true crime en font une tueuse redoutable</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        </div>
</div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</html>