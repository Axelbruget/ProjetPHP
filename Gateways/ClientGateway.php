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
    private $phraseComplique='mysql:host=localhost;dbname=test;charset=utf8';
    private $login='root';
    private $mdp='';

    public function __construct(){
        $this->con = new Connection($this->phraseComplique,$this->login,$this->mdp);
    }

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

    public function deleteClient($p){
        $requete="delete from client2 where id=?";
        $valeurs=[
            "$p->id" => PDO::PARAM_INT
        ];

        $this->con->executeQuery($requete, $valeurs);
    }

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

    public function findClient($login,$password){
        var_dump($login);
        var_dump($password);
        $requete="select login, isAdmin from client2 where login=? and password=?";
        $valeurs=array(
            "$login" => PDO::PARAM_STR,
            "$password" => PDO::PARAM_STR
        );
        echo "valeurs";
        var_dump($valeurs);
        $this->con->executeQuery($requete, $valeurs);
        $res=$this->con->getResults();
        var_dump($res);
        if($res==NULL){
            return false;
        }
        else{
            return true;
        }
    }
}