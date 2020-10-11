<?php
require_once "contenu.php";
$contenu = new contenu();
?>

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
<header>
    <?php $contenu->getheader("../img/logo-nature-libre.png")?>
</header>
<body>

<?php $contenu->getCardGraphBatons(); ?>

</body>
<footer>
    <?php $contenu->getfooter();?>
</footer>
</html>

