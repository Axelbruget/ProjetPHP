<?php

class Client
{
    private $id; //-1 si non définis
    private $login;
    private $mdp;
    private $statut; //"client","admin","superAdmin","undifined"

    public function __construct($id,$login,$mdp, $statut){
        $this->id=$id;
        $this->login=$login;
        $this->mdp=$mdp;
        $this->statut=$statut;
    }

    public function getId(){
        return $this->id;
    }
    public function getLogin(){
        return $this->login;
    }
    public function getMdp(){
        return $this->mdp;
    }
    public function getStatut(){
        return $this->statut;
    }

    public function setId($id){
        $this->id=$id;
    }
    public function setLogin($login){
        $this->login=$login;
    }
    public function setMdp($mdp){
        $this->mdp=$mdp;
    }
    public function setStatut($statut){
        $this->statut=$statut;
    }

    public function __toString()
    {
        return $this->id;
    }
}