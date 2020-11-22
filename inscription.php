<?php
require_once "contenu.php";
require "Controller/functions.php";
$contenu = new contenu();
$functions = new functions();
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
    <title>MOPODES - Inscription</title>
</head>
<body>
<?php
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$mdp_verif = $_POST['mdp_verif'];
?>
<header><?php $contenu->getheader(); ?></header>
<form style='margin: 15px;' method='post'>
    <div class='container' style="margin-bottom: 25px;">
        <div class='row mb-2'>
        </div>
        <h2>Devenez ambassadeur</h2>
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
    if (!empty($email) && !empty($mdp)) {
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
                        $functions->insertuser('$email', '$md5mdp');
                        $functions->envoyeremail($email);
                        echo "<h4>Un mail de bienvenue vous a été envoyé à l'adresse e-mail renseignée ci-dessus</h4>";
                    } catch (mysqli_sql_exception $exception) {
                        echo "$exception";
                    }
                }
            }
        }
    }
}
?>
<?php
$contenu->getfooter();
?>
</body>
</html>
