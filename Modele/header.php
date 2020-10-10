<?php


class header
{
public static function getheader(){
    echo <<<_END
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 25px;">
        <img src="./img/logo-nature-libre.png" width="8%" height="8%" style="margin-left: 25px;">
        <a class="navbar-brand" href="../index.php" style="margin-left:20px;padding-left:25px; padding-right:25px; border-left:1px solid #333; border-right: 1px solid #333;">MOPODES</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link active" href="../index.php" style="margin:15px;">Accueil </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php" style="margin:15px;">Nos services </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php" style="margin:15px;">Qui sommes-nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../edt.php" style="margin:15px;">Activités de la semaine</a>
                </li>
            </ul>
        </div>
    </nav>
    _END;
}
}