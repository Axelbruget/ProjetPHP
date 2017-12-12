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
    private $login;
    private $mdp;
    private $isAdmin; //0 : client, 1 : admin

    public function __construct($id,$login,$mdp, $isAdmin){
        $this->id=$id;
        $this->login=$login;
        $this->mdp=$mdp;
        $this->isAdmin=$isAdmin;
    }

    public function __toString()
    {
        return $this->id;
    }
}