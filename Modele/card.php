<?php

class card
{
    /*protected $nom;
protected $desc;
protected$image;
protected $link;

/*public function __construct($prmnom,$prmdesc,$prmimage,$prmlink){
    $this->nom = $prmnom;
    $this->desc = $prmdesc;
    $this->image = $prmimage;
    $this->link = $prmlink;

}*/

    public function card($image,$nom,$desc,$link){
        ?>
        <div class="col-sm-3" style="margin:20px;">
            <div class="card">
                <div class="col col-12 card card-body">
                    <img class="card-img img-graph" src="<?php echo $image?>">
                <h2 class="card-title"><?php  echo $nom?></h2>
                    <hr>
                    <p class="card-text"><?php echo  $desc?></p>
                    <hr>
                    <a href="<?php echo $link?>" class="btn" style="color:#394da6;">Plus d'informations</a>
            </div>
        </div>
    </div>
        <?php
    }

    /**
     * card constructor.
     */
    public function __construct()
    {
    }
}


