<?php

require_once "Modele/header.php";
require_once "Modele/footer.php";
require_once "Modele/functions.php";
require_once "Modele/getlinks.php";
$functions = new functions();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $getlinks = new getlinks();
    $getlinks->getlinks(); ?>
    <title>Les Fripouilles - Connexion</title>
</head>
<body>
<header>
    <?php getheader(); ?>
</header>
<?php
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$md5mdp = md5($mdp);
?>
<form style='margin: 15px;' method='post' action="enregistrer-infos-enfant.php">
    <div class='container'>
        <div class="row" style="margin-bottom: 35px;">
            <div class="col-md-6" style="border-right: 1px solid #333">
                <h4>Se connecter au RAM Les Fripouilles</h4>
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
                <h4>Pas encore inscrit au RAM Les Fripouilles ?</h4>
                <a href="inscription.php" class="btn btn-primary" style="margin-top: 145px; margin-right:25px;">S'inscrire
                    au RAM</a>
            </div>
        </div>
        <hr>
        <h4>Vous inscrire au relais d'assistants maternelles Les Fripouilles c'est : </h4>
        <ul style="margin-left:25px;">
            <li>Un accueil personnalisé pour vous et votre enfant</li>
            <li>Des activités adaptés pour tous</li>
            <li>Un centre administratif pour faciliter vos démarches</li>
            <li>Du personnel qualifié prêt à vous écouter</li>
        </ul>
    </div>
    <?php

    if (isset($_POST['envoi'])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $md5_verif = $functions->verif_mdp($email);
            if ($md5mdp == $md5_verif) {
                setcookie('connection', $email, -1);
                $id = $functions->getid($email);
            } else {
                if (isset($_COOKIE['connection'])) {
                    unset($_COOKIE['connection']);
                }
                echo "<script language='JavaScript'>";
                echo "alert('L'adresse mail et/ou le mot de passe que vous avez renseignés ne sont pas corrects, veuillez réessayer')";
                echo "</script>";
                exit;
            }
        }
    }
    ?>
</form>


<footer>
    <?php getfooter(); ?>
</footer>
</body>
</html>