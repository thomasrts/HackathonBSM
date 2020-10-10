<?php
require_once "../Modele/header.php";
require_once "../Modele/footer.php";
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
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/Chart.css">
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/Chart.bundle.js"></script>
    <title>MOPODES - Connexion</title>
</head>
<body>
<header>
    <?php $header->getheader(); ?>
</header>
<form style='margin: 15px;' method='post'>
    <div class='container'>
        <div class="row" style="margin-bottom: 35px;">
            <div class="col-md-6" style="border-right: 1px solid #333">
                <h4>Se connecter au projet MOPODES</h4>
                <div class="form-group">
                    <label style='width: 150px ; margin-bottom:10px;'>Email : <br/><input id="$nom" type='text' required
                                                                                          placeholder="example@gmail.com"
                                                                                          name='email'></label>
                </div>
                <div class="form-group" style="margin-bottom:15px;">
                    <label style='width: 150px; margin-bottom:10px;'>Mot de passe : <br/><input id="$nom"
                                                                                                type='password' required
                                                                                                name='mdp'></label>
                </div>
                <button type="submit" name='envoi' style='border-top:25px' class="btn btn-primary">Valider</button>
            </div>
            <div class="col-md-5" style="margin-left: 20px;">
                <h4>Pas encore inscrit au projet MOPODES ?</h4>
                <a href="inscription.php" class="btn btn-primary" style="margin-top: 145px; margin-right:25px;">S'inscrire
                    au MOPODES</a>
            </div>
        </div>

</form>
<footer>
</footer>
</body>
</html>