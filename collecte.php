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
    <title>Document</title>
</head>
<body>
<header><?php $header->getheader()?></header>

<?php $caroussel->carousel();?>

<footer><?php $footer->getfooter();?></footer>
</body>
</html>