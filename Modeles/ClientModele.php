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

    public function __construct($con, $p)
    {
        $this->cg=new ClientGateway($con);
    }

    public function afficherLesClient(){
        $this->cg->display();
    }

    //ajouterClient
    //supprimerClient
    //choisirUnClient
    //seConnecter();
    //seDeconnecter();
}