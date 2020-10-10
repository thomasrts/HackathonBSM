<?php


class footer
{
public static function getfooter(){
    echo <<<_END

    <div class="container">
    <hr>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>A propos de nous</h6>
                <p class="text-justify">MOPODES</i></p>
            </div>
            <div class="col-xs-6 col-md-3">
                <h6>Accès rapide </h6>
                <ul class="footer-links">
                    <li><a href="../connexion.php">Se connecter a son espace personnel</a></li>
                    <li><a href="../inscription.php">S'inscrire aux Fripouilles</a></li>
                    <li><a href="#">Accéder au calendrier des activités</a></li>
                    <li><a href="../nos-services.php">Nos services administratifs</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyrights &copy; 2020 Tous droits réservés
                    <a href="https://ouranet.com">OURANET</a>. <a href="../mentions-legales.php">Nos mentions légales</a>
                </p>
            </div>
        </div>
    </div>
_END;
}
}