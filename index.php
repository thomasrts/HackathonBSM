<?php
require_once "Modele/header.php";
require_once "Modele/footer.php";
$header = new header();
$footer = new footer();
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
<body>
<header><?php $header->getheader()?></header>

<footer><?php $footer->getfooter();?></footer>
</body>
</html>