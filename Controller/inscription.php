<?php
require "Modele/header.php";
require "Modele/footer.php";
require "Modele/carousel.php";
require "Modele/functions.php";
require "Modele/getlinks.php";
$carousel = new carousel();
$functions = new functions();
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $getlinks = new getlinks();
    $getlinks->getlinks(); ?>
    <title>Les Fripouilles - Inscription</title>
</head>
<body>
<?php
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$mdp_verif = $_POST['mdp_verif'];
?>
<?php
if (isset($_COOKIE['connection'])) {
    getheaderconn();
} else {
    getheader();
}
?>

<form style='margin: 15px;' method='post' action="enregistrer-infos-enfant.php">
    <div class='container' style="margin-bottom: 25px;">
        <div class='row mb-2'>
        </div>
        <h2>S'inscrire au relais Les Fripouilles</h2>
        <div class="form-group">
            <label style='width: 150px'>Email : <br/><input id="$nom" type='text' required
                                                            placeholder="example@gmail.com" name='email'></label>
        </div>
        <div class="form-group">
            <label style='width: 150px'>Mot de passe : <br/><input id="$nom" type='password' required placeholder=""
                                                                   name='mdp'></label>
        </div>
        <div class="form-group">
            <label style='width: 150px'>Verification mot de passe : <br/><input id="$nom" type='password' placeholder=""
                                                                                name='mdp_verif'></label>
        </div>
        <button type="submit" name='envoi' style='border-top:25px; margin-top: 25px ;' class="btn btn-primary">Valider
        </button>
    </div>
</form>
<?php
if (isset($_POST['envoi'])) {
    if ($functions->verif_email($email)) {
        echo "<script language='JavaScript'>";
        echo 'alert("Adresse E-Mail déjà utilisée")';
        echo "</script>";
    } else {
        if ($mdp != $mdp_verif) {
            echo "<script language='JavaScript'>";
            echo 'alert("Les mots de passe ne correspondent pas, veuillez réessayer")';
            echo "</script>";
            exit;
        } else {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                try {
                    $md5mdp = md5($mdp);

                    $sql_connexion = mysqli_connect("51.83.42.191", "Thomas", "#*ThomasR62", "PPE3FRIPOUILLES");
                    $mysql_query = "INSERT INTO login_parent (email_parent,md5_pass_parent) VALUES ('$email','$md5mdp')";
                    if (!($res = $sql_connexion->query($mysql_query))) {
                        printf("[%d] %s\n", $sql_connexion->errno, $sql_connexion->error);
                    } else {
                        $functions->envoyeremail($email);
                        sleep(1);
                        echo "<br>Votre inscription au relais d'assistances maternelles a bien été prise en compte";
                    }
                    $sql_connexion->close();
                } catch (mysqli_sql_exception $exception) {
                    echo "$exception";
                }
            }
        }
    }
}
?>
<?php
getfooter();
?>
</body>
</html>
