<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 28/11/2017
 * Time: 14:17
 */

class ClientGateway
{
    private $con;
    private $phraseComplique='mysql:host=localhost;dbname=sitedenewsbdd;charset=utf8';
    private $login='root';
    private $mdp='';

    public function __construct(){
        $this->con = new Connection($this->phraseComplique,$this->login,$this->mdp);
    }

    //ajouterClient
    public function insertClient($p){
        $requete="insert into client2 values(?,?,?,?)";
        $valeurs=[
            "$p->id" => PDO::PARAM_INT,
            "$p->login" => PDO::PARAM_STR,
            "$p->mdp" => PDO::PARAM_STR,
            "$p->isAdmin" => PDO::PARAM_INT
        ];
        $this->con->executeQuery($requete, $valeurs);
    }

    //supprimerClient
    //(par id car on a pas besoin d'instancier un client à chaque fois que l'on veux supprimer de cette maniere)
    public function deleteClient($id){
        $requete="delete from client2 where id=?";
        $valeurs=[
            "$id" => PDO::PARAM_INT
        ];

        $this->con->executeQuery($requete, $valeurs);
    }

    //trouverUnClient : renvoie l'id si trouvé, -1 sinon
    public function findClient($login,$password){
        $requete="select id from client2 where login=? and password=?";
        $valeurs=array(
            "$login" => PDO::PARAM_STR,
            "$password" => PDO::PARAM_STR
        );
        $this->con->executeQuery($requete, $valeurs);
        $res=$this->con->getResults();
        if($res==NULL){
            return -1;
        }
        else{
            return $res[0][0];
        }
    }

    public function getStatut($id){
        $requete="select statut from client2 where id=?";
        $valeurs=array(
            "$id" => PDO::PARAM_INT
        );
        $this->con->executeQuery($requete, $valeurs);
        $res=$this->con->getResults();
        return $res[0][0];
    }

    //-----------------------------------------------------------

    public function display(){
        $requete="select * from client2";
        $valeurs=[];

        $this->con->executeQuery($requete, $valeurs);
        $res=$this->con->getResults();
        $this->con->displayResults($res);
    }

    public function displayByClient($p){
        $requete="select * from client2 where id=?";
        $valeurs=[
            "$p->id" => PDO::PARAM_INT
        ];

        $this->con->executeQuery($requete, $valeurs);
        $res=$this->con->getResults();
        $this->con->displayResults($res);
    }
}