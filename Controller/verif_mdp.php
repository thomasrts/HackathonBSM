<?php
$functions = new functions();
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$md5mdp = md5($mdp);
if ($functions->verif_mdp($email) != $md5mdp) {
    header("Location: ../connexion.php");
}
?>
