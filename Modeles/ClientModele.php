<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 28/11/2017
 * Time: 14:19
 */

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

    public function connection(){
        echo "session";
        var_dump($_SESSION);
        return $this->cg->findClient($_SESSION['login'],$_SESSION['password']);
    }

    //ajouterClient
    //supprimerClient
    //choisirUnClient
    //seConnecter();
    //seDeconnecter();
}