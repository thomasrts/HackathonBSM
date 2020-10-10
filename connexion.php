<?php
require_once "Modele/contenu.php";
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
    <title>MOPODES - Connexion</title>
</head>
<body>
<header>
    <?php $contenu->getheader(); ?>
</header>
<?php
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$md5mdp = md5($mdp);
?>
<form style='margin: 15px;' method='post' action="Controller/verif_mdp.php">
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
            <div>


            </div>
            <div class="col-md-5" style="margin-left: 20px;">
                <h4>Pas encore inscrit au projet MOPODES ?</h4>
                <a href="inscription.php" class="btn btn-primary" style="margin-top: 145px; margin-right:25px;">S'inscrire
                    au MOPODES</a>
            </div>
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
    <?php $contenu->getfooter(); ?>
</footer>
</body>
</html>