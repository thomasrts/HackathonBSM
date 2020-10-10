<?php


class contenu
{
public static function getheader(){
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 25px;">
        <img src="img/logo-nature-libre.png" width="8%" height="8%" style="margin-left: 25px;">
        <a class="navbar-brand" href="index.php"
           style="margin-left:20px;padding-left:25px; padding-right:25px; border-left:1px solid #333; border-right: 1px solid #333;">MOPODES</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link active" href="../index.php" style="margin:15px;">Données en brut </a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">

                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin:15px;">
                            Accès aux actions
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Bac a Marée</a>
                            <a class="dropdown-item" href="#">Nettoyage de plages</a>
                            <a class="dropdown-item" href="#">OSPAR</a>
                            <a class="dropdown-item" href="#">Plastic's origins</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php" style="margin:15px;">Qui sommes-nous</a>
                </li>
            </ul>
            <a href="inscription.php" class="btn btn-primary" style="margin: 10px;">Rejoignez-nous</a>
            <a href="connexion.php" class="btn btn-primary" style="margin: 10px;">Connexion</a>

        </div>
    </nav>
    <?php
    }

    public function getCard($image, $nom, $desc,$link)
    {
        ?>
            <div class="col-sm-3" style="margin:20px; color:">
                <div class="card">
                    <div class="col col-12 card card-body">
                        <img class="card-img img-graph" src="<?php echo $image?>">
                        <h2 class="card-title"><?php  echo $nom?></h2>
                        <p class="card-text"><?php echo  $desc?></p>
                        <a href="<?php echo $link?>" class="btn" style="color:#394da6;">Plus d'informations</a>
                    </div>
                </div>
            </div>
        <?php
    }

        public function getCarousel($img1, $img2, $img3)
    {
        ?>
            <div id="carouselExemple" class="carousel slide container" data-ride="carousel" data-interval="3000" style="margin-bottom: 40px;">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExemple" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExemple" data-slide-to="1"></li>
                    <li data-target="#carouselExemple" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" style="text-align-all: center;">
                    <div class="carousel-item active">
                        <img src="$img1" class="d-block img-graph" >
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Données en courbes</h5>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="$img2" class="d-block img-graph" >
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Données en camenbert</h5>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="$img3" class="d-block img-graph" >
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Données en batons</h5>

                        </div>
                    </div>
                    <a href="#carouselExemple" class="carousel-control-prev" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="ture"></span>
                        <span class="sr-only" style="color:#000000">Previous</span>
                    </a>
                    <a href="#carouselExemple" class="carousel-control-next" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only" style="color:#000000">Next</span>
                    </a>
                </div>
            </div>
        <?php
    }

    public static function getfooter(){
        ?>
            <div class="container">
                <hr>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h6>A propos de nous</h6>
                        <p class="text-justify">MOPODES</i></p>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <h6>Accès rapide</h6>
                        <ul class="footer-links">
                            <li><a href="../connexion.php">Se connecter a son espace personnel</a></li>
                            <li><a href="../inscription.php"></a></li>
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
        <?php
    }

    public function getCardPresentation($img1, $img2, $img3, $img4, $titre1,$titre2,$titre3,$titre4,$desc1,$desc2,$desc3,$desc4)
    {
        ?>
        <div class="container-sm" >
            <div class="row ">
                <div class="card" style="width: 30rem; margin-right:7%; margin-left:5%;">
                    <img src="<?php echo $img1 ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $titre1?></h5>
                        <p class="card-text"><?php echo $desc1?></p>
                        <a href="#" class="btn btn-primary">Accéder à la plateforme</a>
                    </div>
                </div>
                <div class="card" style="width: 30rem;margin-right:7%;margin-left:5%;">
                    <img src="<?php echo $img2 ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $titre2?></h5>
                        <p class="card-text"><?php echo $desc2?></p>
                        <a href="#" class="btn btn-primary">Accéder à la plateforme</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="card" style="width: 30rem;margin-right:7%;margin-left:5%;">
                    <img src="<?php echo $img3 ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $titre3?></h5>
                        <p class="card-text"><?php echo $desc3?></p>
                        <a href="#" class="btn btn-primary">Accéder à la plateforme</a>
                    </div>
                </div>
                <div class="card" style="width: 30rem;margin-right:7%;margin-left:5%;">
                    <img src="<?php echo $img4 ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $titre4?></h5>
                        <p class="card-text"><?php echo $desc4?></p>
                        <a href="#" class="btn btn-primary">Accéder à la plateforme</a>
                    </div>
                </div>
            </div>
            <hr style="margin-top:50px;">

        </div>
        <?php
    }

    public function getGraphCirculaires()
    {

    }

    public function getGraphBatons()
    {

    }

    public function getGraphCompartiments()
    {

    }

    public function getGraphCourbes()
    {

    }

    public function getGraphNuages()
    {

    }

    public function getGraphTableaus()
    {

    }
}