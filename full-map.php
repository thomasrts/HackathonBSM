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
    <h3>Carte interactive :</h3>
    <hr>
</div>
<iframe width="100%" height="650px" allowfullscreen src="//umap.openstreetmap.fr/en/map/test-integration_509181?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe>

<footer><?php $contenu->getfooter(); ?></footer>
</body>
</html>