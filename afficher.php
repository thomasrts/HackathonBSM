<?php


class afficher
{

    public $nbPlastiquePourcent = 0;
    public $nbCaoutchoucPourcent = 0;
    public $nbTextilePourcent = 0;
    public $nbPapierCrayonPourcent = 0;
    public $nbBoisPourcent = 0;
    public $nbMetalPourcent = 0;
    public $nbVerreCeramiquePourcent = 0;
    public $nbDiversPourcent = 0;


    public function getDonnees()
    {
        require_once "Controller/RequetesSQL.php";

        $bdd = new RequetesSQL();

        $result = $bdd->GetTypeObjet();
        $rows = $result->num_rows;
        $NombrePlastiques = 0;
        $NombreCaoutchouc = 0;
        $NombreTextile = 0;
        $NombrePapierCrayon = 0;
        $NombreBois = 0;
        $NombreMetal = 0;
        $NombreVerreCeramique = 0;
        $NombreDivers = 0;


        for($i = 0; $i<$rows;++$i)
        {
            $result->data_seek($i);
            //echo htmlspecialchars($result->fetch_assoc()['Id_Type_dechets']) . "</br>";

            $result->data_seek($i);
            //echo htmlspecialchars($result->fetch_assoc()['DCSMM']) . "</br>";

            $result->data_seek($i);
            //echo htmlspecialchars($result->fetch_assoc()['OSPAR']) . "</br>";

            $result->data_seek($i);
            $GetCatObjets = $result->fetch_assoc()['Cat_dechets'];

            if($GetCatObjets == "Plastique")
            {
                $NombrePlastiques++;
            }
            if($GetCatObjets == "Caoutchouc")
            {
                $NombreCaoutchouc++;
            }
            if ($GetCatObjets == "Textile")
            {
                $NombreTextile++;
            }
            if($GetCatObjets == "Papier / Carton")
            {
                $NombrePapierCrayon++;
            }
            if($GetCatObjets == "Bois")
            {
                $NombreBois++;
            }
            if($GetCatObjets == "Métal")
            {
                $NombreMetal++;
            }
            if($GetCatObjets == "Verre & Céramique")
            {
                $NombreVerreCeramique++;
            }
            if($GetCatObjets == "Autres / Divers")
            {
                $NombreDivers++;
            }


            //echo $GetCatObjets . "</br>";

            $result->data_seek($i);
            //echo htmlspecialchars($result->fetch_assoc()['Sous_cat_dechets']) . "</br>";

            $result->data_seek($i);
            //echo htmlspecialchars($result->fetch_assoc()['Objet']) . "</br>";

            $result->data_seek($i);
            //echo htmlspecialchars($result->fetch_assoc()['Total']) . "</br>";

            $result->data_seek($i);
            //echo htmlspecialchars($result->fetch_assoc()['Commentaires']) . "</br>";
        }

        $Total = $NombreDivers + $NombreMetal + $NombreVerreCeramique+ $NombreBois + $NombrePapierCrayon + $NombreTextile + $NombreCaoutchouc + $NombrePlastiques;

        //echo $Total;


        //echo "Le nombre d'objets en Plastique est : " . $NombrePlastiques . " Cela représente " . round(($NombrePlastiques/$Total) * 100, 2) . " %" ."</br>";
        //echo "Le nombre d'objets en Caoutchouc est : " . $NombreCaoutchouc ." Cela représente " . round(($NombreCaoutchouc/$Total) * 100, 2) . " %" . "</br>";
        //echo "Le nombre d'objets Textile est : " . $NombreTextile . " Cela représente " . round(($NombreTextile/$Total) * 100, 2) . " %" ."</br>";
        //echo "Le nombre d'objets Papier crayon est : " . $NombrePapierCrayon . " Cela représente " . round(($NombrePapierCrayon/$Total) * 100, 2) . " %" ."</br>";
        //echo "Le nombre d'objets en Bois est : " . $NombreBois . " Cela représente " . round(($NombreBois/$Total) * 100, 2) . " %" . "</br>";
        //echo "Le nombre d'objets en Métal est : " . $NombreMetal . " Cela représente " . round(($NombreMetal/$Total) * 100, 2) . " %" . "</br>";
        //echo "Le nombre d'objets en Verre et Céramique est : " . $NombreVerreCeramique . " Cela représente " . round(($NombreVerreCeramique/$Total) * 100, 2) . " %" . "</br>";
        //echo "Le nombre d'objets Autre et divers est : " . $NombreDivers . " Cela représente " . round(($NombreDivers/$Total) * 100, 2) . " %" ."</br>";

         $this->nbPlastiquePourcent = round(($NombrePlastiques/$Total) * 100,2);
         $this->nbCaoutchoucPourcent = round(($NombreCaoutchouc/$Total) * 100,2);
         $this->nbTextilePourcent = round(($NombreTextile/$Total) * 100,2);
         $this->nbPapierCrayonPourcent = round(($NombrePapierCrayon/$Total * 100),2);
         $this->nbBoisPourcent = round(($NombreBois/$Total) * 100,2);
         $this->nbMetalPourcent = round(($NombreMetal/$Total) * 100,2);
         $this->nbVerreCeramiquePourcent = round(($NombreVerreCeramique/$Total) * 100,2);
         $this->nbDiversPourcent = round(($NombreDivers/$Total) * 100,2);

    }
}