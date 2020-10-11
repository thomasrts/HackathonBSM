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
    <title>Document</title>
</head>
<body>
<header><?php $contenu->getheader("img/logo-nature-libre.png"); ?></header>
<div class="container">
    <div class="row">
        <div class="card col-md-4">
            <div class="col card-body">
                <img class="card-img img-graph" src="img/netoyagedeplages.jpg">
                <h2 class="card-title">A propos de cette action : </h2>
                <p>L'action de nettoyages de plages consiste en une journée de mobilisation pour nettoyer nos plages
                    françaises. Elles permettent de récupérer un nombre importants de déchets et de polluants</p>
            </div>
        </div>
        <div class="col-md-8" style="padding-top: 5px" >
            <?php $contenu->getCardGraphCirculaire(); ?>
        </div>
    </div>
    <div class="row">
        <h3>Carte interactive</h3>
        <div class="card">
            <iframe style="margin-top:15px; margin-bottom: 15px;"width="100%" height="600px" frameborder="0" allowfullscreen src="//umap.openstreetmap.fr/en/map/test-integration_509181?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe>
        </div>
    </div>
</div>
<footer><?php $contenu->getfooter(); ?></footer>
</body>
</html>