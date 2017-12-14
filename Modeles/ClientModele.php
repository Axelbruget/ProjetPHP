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
        return $this->cg->findClient($_SESSION['clientCourant']->getLogin(),$_SESSION['clientCourant']->getMdp());
    }

    //savoir le status
    public function getStatut(){
        return $this->cg->getStatut($_SESSION['clientCourant']->getId());
    }

    //ajouterClient
    //supprimerClient
    //choisirUnClient
    //seDeconnecter();
}