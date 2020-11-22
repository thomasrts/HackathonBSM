<?php
require_once "contenu.php";
$contenu = new contenu();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/contenu.css">
    <link rel="stylesheet" href="css/Chart.css">

    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/Chart.bundle.js"></script>

    <title>Bac à marée - Accueil</title>
</head>
<body>
<header><?php $contenu->getheader("img/logo-nature-libre.png") ?></header>

<div class="container">
    <h4>Accéder aux informations de "Bac à marée"</h4>
    <hr>
    <div class="row col-md-12" style="margin-left:15%"><?php
        $contenu->getCardintopage("img/Diagramme%20circulaire.jpg", "Forme : Diagramme circulaire", "./Modele/circulaires.php");
        $contenu->getCardintopage("img/Diagramme%20en%20batons.jpg", "Forme : Diagramme en batons", "./Modele/batons.php");
        $contenu->getCardintopage("img/code.png", "Forme brute : CSV / JSON / XML", "./Modele/batons.php"); ?>
    </div>
</div>
<footer><?php $contenu->getfooter() ?></footer>
</body>
</html>