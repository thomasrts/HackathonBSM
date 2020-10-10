<?php
require_once "Modele/contenu.php";
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
    <?php $contenu->getheader()?>
</header>

<div class="container-sm">
    <h4>Découvrez nos actions MOPODES</h4>
    <hr>
</div>


<?php
    $contenu->getCardPresentation("img/bacamare.jpg","img/netoyagedeplages.jpg","img/ospar.jpg","img/plasticsorigins.jpg","Bac à marée","Nettoyage de plages","OSPAR","Plastics's origins","oui","Journée de sensibilisation lors du nettoyage des plages polluées par les déchets","Protection du milieu","Dictionnaire de données ou tableau double entrée avec outil de recherche assez poussé pour ressortir les études sur une période ou sur un type donné");
?>

<div class="container">
    <h3>Espace MOPODES</h3>
</div>


<div class="row" style="margin-left:250px;">
    <?php
    $contenu->getCard("img/Courbes.jpg", "Courbes", "Ce sont des courbes", "/Modele/Graphiques/courbes.php");
    $contenu->getCard("img/Diagramme%20circulaire.jpg", "Diagramme circulaire", "C'est un diag circulaire", "/Modele/Graphiques/circulaires.php");
    $contenu->getCard("img/Diagramme%20en%20batons.jpg", "Diagramme en batons", "C'est un diag en batons", "/Modele/Graphiques/batons.php");
    ?>
</div>
<div class="row" style="margin-left:250px;">
    <?php
    //Monitoring des actions
    $contenu->getCard("img/Nuage.jpg","Nuage","Ce sont des nuages","/Modele/Graphiques/nuage.php");
    $contenu->getCard("img/Graphique%20compartimentable.jpg", "Graphique compartimentable", "GRAPH ME PARLE PAS BENJAMIN ALED", "/Modele/Graphiques/compartiments.php");
    $contenu->getCard("img/Tableau.jpg", "Tableau", "Ceci est un tableau ", "/Modele/Graphiques/tableau.php");
    ?>
</div>

<footer>
    <?php $contenu->getfooter();?>
</footer>

</body>
</html>