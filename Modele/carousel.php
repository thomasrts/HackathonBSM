<?php


class carousel
{
    public function carrousel($img1, $img2, $img3)
    {
        echo <<<_END
    <div id="carouselExemple" class="carousel slide container" data-ride="carousel" data-interval="3000" style="margin-bottom: 40px;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExemple" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExemple" data-slide-to="1"></li>
            <li data-target="#carouselExemple" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="text-align-all: center;">
            <div class="carousel-item active">
                <img src="$img1" class="d-block" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Les Fripouilles</h5>
                    <p>Votre relais d'assistants maternelles</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="$img2" class="d-block" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Des activités pour tous</h5>
                    <p>De 3 à 14 ans !</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="$img3" class="d-block" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Des services administratfis</h5>
                    <p>Pour vous aider au quotidien !</p>
                </div>
            </div>
            <a href="#carouselExemple" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="ture"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a href="#carouselExemple" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        
    </div>
    _END;
    }
    public function carousel1($img1){
            echo <<<_END
    <div id="carouselExemple" class="carousel slide container" data-ride="carousel" data-interval="3000" style="margin-bottom: 40px;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExemple" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner" style="text-align-all: center;">
            <div class="carousel-item active">
                <img src="$img1" class="d-block" >
            </div>
            <a href="#carouselExemple" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="ture"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a href="#carouselExemple" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        
    </div>
    _END;
    }
}