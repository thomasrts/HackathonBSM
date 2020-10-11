<?php


class RequetesSQL
{
    private $sql_connexion;

    public function Connectbdd()
    {
        require_once 'Login.php';
        $login = new login();
        $this->sql_connexion = mysqli_connect($login->host,$login->user,$login->mdp,$login->bd);
        if ($this->sql_connexion->connect_error) die("Erreur Fatale Bilie...");

        $this->sql_connexion->set_charset("utf8");

        mysqli_set_charset($this->sql_connexion, "utf8");
    }

    public function GetTypeObjet()
    {
        $this->Connectbdd();
        $query = "SELECT * FROM type_dechets";
        $result = mysqli_query($this->sql_connexion, $query);

        if(!$result) die("Erreur à la selection");

        return $result;
    }

    public function GetTypeObjets()
    {
        $this->Connectbdd();
        $query = "SELECT *, COUNT(Cat_dechets) as nbre_cat_dechets FROM type_dechets where cat_dechets = 'Plastique' group by Id_Type_dechets";
        $query2 = "SELECT COUNT(*) FROM type_dechets";

        $result = mysqli_query($this->sql_connexion, $query);
        $result2 = mysqli_query($this->sql_connexion, $query2);

        return $result;

    }

    public function GetTypeObjetFake()
    {
        $this->Connectbdd();
        $query = "SELECT * FROM type_dechets_1";
        $result = mysqli_query($this->sql_connexion, $query);

        if(!$result) die("Erreur à la selection");

        return $result;
    }

}