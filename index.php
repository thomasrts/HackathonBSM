<?php
require_once "Modele/header.php";
require_once "Modele/footer.php";
require_once "Modele/carousel.php";
require_once "Modele/card.php";
$card = new card();
$header = new header();
$footer = new footer();
$caroussel = new carousel();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/Chart.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/Chart.bundle.js"></script>
    <title>MOPODES</title>
</head>
<body>
<header><?php $header->getheader()?></header>
<div class="container-sm">
    <h4>Bienvenue dans l'accueil du projet MOPODES</h4>
    <hr>
    <div>
        <h5 style="margin-bottom: 20px;">Accéder aux différents projets : </h5>

    </div>

</div>

<div class="container-sm">
    <div class="row">
        <div class="card" style="width: 30rem;">
            <img src="..." class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Bac à marée</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 30rem;">
            <img src="..." class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Nettoyage de plages</h5>
                <p class="card-text">Journée de sensibilisation lors du nettoyage des plages polluées par les
                    déchets</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card" style="width: 30rem;">
            <img src="..." class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">OSPAR</h5>
                <p class="card-text">Protection du milieu de mar</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 30rem;">
            <img src="..." class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Plastic's origins</h5>
                <p class="card-text">Dictionnaire de données ou tableau double entree avec outil de recherche assez
                    poussé pour ressortir les études sur une période ou sur un type donné</p>
                <a href="#" class="btn btn-primary">Accéder à la plateforme</a>
            </div>
        </div>
    </div>
    <hr>
</div>


<div class="row" style="margin-left:250px;">
    <?php
    $card->card("img/Courbes.jpg","Courbes","Ce sont des courbes","/Modele/Graphiques/courbes.php");
    $card->card("img/Diagramme%20circulaire.jpg","Diagrammme circulaire","C'est un diag circulaire","/Modele/Graphiques/circulaires.php");
    $card->card("img/Diagramme%20en%20batons.jpg","Diagramme en batons","C'est un diag en batons","/Modele/Graphiques/batons.php");
    ?>
</div>
<div class="row" style="margin-left:250px;">
    <?php
    $card->card("img/Nuage.jpg","Nuage","Ce sont des nuages","/Modele/Graphiques/nuage.php");
    $card->card("img/Graphique%20compartimentable.jpg", "Graphique compartimentable", "GRAPH ME PARLE PAS BENJAMIN ALED", "/Modele/Graphiques/compartiments.php");
    $card->card("img/Tableau.jpg", "Tableau", "Ceci est un tableau ", "/Modele/Graphiques/tableau.php");
    ?>
</div>

<footer><?php $footer->getfooter();?></footer>

</body>
</html>