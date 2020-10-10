<?php
require_once "Modele/header.php";
require_once "Modele/footer.php";
require_once "Modele/carousel.php";
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
    <script src="js/bootstrap.bundle.js"></script>
    <title>MOPODES</title>
</head>

<header><?php $header->getheader()?></header>

<div class="row">
    <div class="col-sm-4">
        <div class="card">
            <div class="col col-12  card card-body">
                <img class="card-img img-graph" src="img/Courbes.jpg">
                <h2 class="card-title ">Courbes</h2>
                <p class="card-text">Ce sont des courbes</p>
                <a href="#" class="btn btn-primary">Plus d'informations</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
         <div class="col col-12 card card-body">
            <img class="card-img img-graph" src="img/Diagramme%20circulaire.jpg">
            <h2 class="card-title">Diagrammme circulaire</h2>
            <p class="card-text">C'est un diag circulaire</p>
            <a href="#" class="btn btn-primary">Plus d'informations</a>
        </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="col col-12 card card-body">
                <img class="card-img img-graph" src="img/Diagramme%20en%20batons.jpg">
                <h2 class="card-title">Diagrammme batons</h2>
                <p class="card-text">C'est un diag en baton</p>
                <a href="#" class="btn btn-primary">Plus d'informations</a>
            </div>
        </div>
    </div>
</div>

<?php $caroussel->carrousel("img/Courbes.jpg", "img/Diagramme circulaire.jpg", "img/Diagramme en batons.jpg");?>

<footer><?php $footer->getfooter();?></footer>

</body>
</html>