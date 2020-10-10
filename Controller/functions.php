<?php

class functions
{
    function setid($id)
    {
        $id_gen = $id;
    }

    function verif_mdp($email)
    {
        $sql_connexion = mysqli_connect("51.83.42.191", "Thomas", "#*ThomasR62", "hackathon");
        $sql_verif = "";
        $envoi_query = mysqli_query($sql_connexion, $sql_verif);
        $donnees = mysqli_fetch_array($envoi_query);
        mysqli_close($sql_connexion);
        return $donnees['MD5'];

    }

    function verif_email($email)
    {
        $sql_connexion = mysqli_connect("51.83.42.191", "Thomas", "#*ThomasR62", "hackathon");
        $query_id = "";
        $envoi_query = mysqli_query($sql_connexion, $query_id);
        $donnees = mysqli_fetch_array($envoi_query);
        mysqli_close($sql_connexion);
        if ($donnees["Email"] != null) {
            return true;
        } else {
            return false;
        }
    }

    function getid($email)
    {
        $sql_connexion = mysqli_connect("51.83.42.191", "Thomas", "#*ThomasR62", "hackathon");
        $sql_verif = "";
        $envoi_query = mysqli_query($sql_connexion, $sql_verif);
        $donnees = mysqli_fetch_array($envoi_query);
        mysqli_close($sql_connexion);
        return $donnees["ID"];

    }

    function insertuser($user, $pass)
    {
        $sql_connexion = mysqli_connect("51.83.42.191", "Thomas", "#*ThomasR62", "hackathon");
        $mysql_query = "INSERT INTO users (login_user, md5_pass_user, nvau_type_acces) VALUES ($user,$pass,1)";
        $sql_connexion->query($mysql_query);
        $sql_connexion->close();
    }

    function envoyeremail($email)
    {
        require 'PHPMailer.php';
        require 'SMTP.php';
        $mailer = new PHPMailer\PHPMailer\PHPMailer();
        $mailer->isSMTP();
        $mailer->CharSet = "UTF-8";
        $mailer->isHtml();
        $mailer->Username = "th.rotsaert@gmail.com";
        $mailer->Password = "";
        $mailer->Host = "smtp.gmail.com";
        $mailer->Port = 587;
        $mailer->SMTPSecure = 'tls';
        $mailer->SMTPAuth = true;
        $mailer->FromName = "Relais d'assistants maternelles";
        $mailer->From = "campingaloha@thomasr.siovision.fr";

        try {
            $mailer->AddAddress("$email");
        } catch (Exception $e) {
        }

        $mailer->Subject = "Inscription réussie";
        $body = '<html><head><link rel="stylesheet" href=""> </head><body>';
        $body .= "<h4>Votre inscription au relais d'assistances maternelles a été effectuée !</h4><br>";
        $body .= '<div class="btn btn-primary"><a href="https://localhost/connexion.php">Connexion</a></div>';
        $body .= '</body></html>';

        $mailer->Body = $body;

        try {
            if (!$mailer->Send()) {
                echo "Le mail de bienvenue n'a pas pu être envoyé.";
                echo 'Mailer error: ' . $mailer->ErrorInfo;
            } else {
                echo "<h4 align='center'>Un mail de bienvenue vous a été envoyé à l'email renseignée</h4>";
            }
        } catch (Exception $e) {
            echo "$e";
        }
    }
}