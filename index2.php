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

    <title>MOPODES</title>
</head>
<body>
<?php

require_once "Modele/contenu.php";

$header = new contenu();


$header->getheader();
$header->getCard("/img/bacamaree", "Bac à Marée", "lorem", "bacamaree.php");
?>
</body>
</html>