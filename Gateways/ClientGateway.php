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
    public function __construct(Connection $con){
        $this->con = $con;
    }

    public function insert($p){
        $requete="insert into client2 values(?,?,?,?)";
        $valeurs=[
            "$p->id" => PDO::PARAM_INT,
            "$p->login" => PDO::PARAM_STR,
            "$p->mdp" => PDO::PARAM_STR,
            "$p->isAdmin" => PDO::PARAM_INT
        ];
        $this->con->executeQuery($requete, $valeurs);
    }

    public function delete($p){
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

    public function displayById($p){
        $requete="select * from client2 where id=?";
        $valeurs=[
            "$p->id" => PDO::PARAM_INT
        ];

        $this->con->executeQuery($requete, $valeurs);
        $res=$this->con->getResults();
        $this->con->displayResults($res);
    }
}