<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 28/11/2017
 * Time: 14:17
 */

class NewsGateway
{
    private $con;
    private $phraseComplique='mysql:host=localhost;dbname=sitedenewsbdd;charset=utf8';
    private $login='root';
    private $mdp='';

    public function __construct(){
        $this->con = new Connection($this->phraseComplique,$this->login,$this->mdp);
    }

    //ajouterNews
    public function insertNews($n){
        $requete="insert into news values(?,?,?,?,?)";

        $valeurs=[
            "$n->id" => PDO::PARAM_INT,
            "$n->date" => PDO::PARAM_STR,
            "$n->nomSite" => PDO::PARAM_STR,
            "$n->url" => PDO::PARAM_STR,
            "$n->description" => PDO::PARAM_STR
        ];
        $this->con->executeQuery($requete, $valeurs);
    }

    //supprimerNews
    //(par id car on a pas besoin d'instancier une news à chaque fois que l'on veux supprimer de cette maniere)
    public function deleteNews($id){
        $requete="delete from news where id=?";
        $valeurs=[
            "$id" => PDO::PARAM_INT
        ];

        $this->con->executeQuery($requete, $valeurs);
    }

    public function getDisplay(){
        $requete="select * from news";
        $valeurs=[];

        $this->con->executeQuery($requete, $valeurs);
        $res=$this->con->getResults();
        return $res;
    }

    //-----------------------------------------------------------

    public function display(){
        $requete="select * from news";
        $valeurs=[];

        $this->con->executeQuery($requete, $valeurs);
        $res=$this->con->getResults();
        $this->con->displayResults($res);
    }

    public function displayByNews($id){
        $requete="select * from news where id=?";
        $valeurs=[
            "$id" => PDO::PARAM_INT
        ];

        $this->con->executeQuery($requete, $valeurs);
        $res=$this->con->getResults();
        $this->con->displayResults($res);
    }

    // Retourne le nombre de news présentes dans la liste

    public function getNombreDeNews(){
        $requete="select count(*) from news";
        $valeurs=[];

        $this->con->executeQuery($requete, $valeurs);
        $res=$this->con->getResults();
        return $this->con->ReturnResults($res);

    }

    public function deleteAllNews(){
        $requete="delete from news";
        $valeurs=[];

        $this->con->executeQuery($requete, $valeurs);


    }

    public function getNews($id){
        $requete="select * from news where id=?";
        $valeurs=[
            "$id" => PDO::PARAM_INT
        ];

        $this->con->executeQuery($requete, $valeurs);
        $res=$this->con->getResults();
        return $res;
    }


    public function getQuelquesNews($nbNews,$newsDeDepart){
        $requete="SELECT * FROM `news` order by id asc limit $nbNews,$newsDeDepart";
        $valeurs=[];

        $this->con->executeQuery($requete, $valeurs);
        $res=$this->con->getResults();
        return $res;
    }
}