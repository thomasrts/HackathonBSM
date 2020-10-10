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
    <link rel="stylesheet" href="css/Chart.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/Chart.bundle.js"></script>
    <title>MOPODES</title>
</head>
<body>
<header><?php $header->getheader()?></header>
<?php
require_once "Modele/card.php";
$card = new card();
?>
<div class="row" style="margin-left:250px;">
    <?php
    $card->card("img/Courbes.jpg","Courbes","Ce sont des courbes","https://ouranet.com");
    $card->card("img/Diagramme%20circulaire.jpg","Diagrammme circulaire","C'est un diag circulaire","https://ouranet.com");
    $card->card("img/Diagramme%20en%20batons.jpg","Diagramme en batons","C'est un diag en batons","https://ouranet.com");
    ?>
</div>
<div class="row" style="margin-left:250px;">
    <?php
    $card->card("img/Nuage.jpg","Nuage","Ce sont des nuages","https://ouranet.com");
    $card->card("img/Graphique%20compartimentable.jpg","Graphique compartimentable","GRAPH ME PARLE PAS BENJAMIN ALED","https://ouranet.com");
    $card->card("img/Tableau.jpg","Tableau","Ceci est un tableau ","https://ouranet.com")
    ?>
</div>

<footer><?php $footer->getfooter();?></footer>

</body>
</html>