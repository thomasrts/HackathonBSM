<?php
require_once "Modele/contenu.php";
$contenu = new contenu();
$footer = new contenu();

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MOPODES - Mentions Légales</title>
</head>
<body>
<header>
    <?php $contenu->getheader();?>
</header>

<footer>
    <?php $contenu->getfooter();?>
</footer>
</body>
</html>