<?php

class ClientModele
{
    private $cg;

    public function __construct()
    {
        $this->cg=new ClientGateway();
    }

    public function afficherLesClient(){
        $this->cg->display();
    }

    //seConnecter();
    public function connection(){
        return $this->cg->findClient($_SESSION['login'],$_SESSION['password']);
    }

    //savoir le status
    public function getStatut(){
        return $this->cg->getStatus($_SESSION['id']);
    }

    //ajouterClient
    //supprimerClient
    //choisirUnClient
    //seDeconnecter();
}