<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 28/11/2017
 * Time: 14:06
 */

class Client
{
    private $id;
    private $nom;
    private $prenom;
    private $login;
    private $mdp;

    public function __construct($id,$nom,$prenom,$login,$mdp){
        $this->id=$id;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->login=$login;
        $this->mdp=$mdp;
    }

    public function __toString()
    {
        return $this->id." ".$this->nom." ".$this->prenom;
    }
}