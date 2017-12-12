<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 28/11/2017
 * Time: 14:11
 */

class Controller
{
    private $action;
    private $login="";

    public function __construct(){
        session_start();
        if(isset($_REQUEST['action'])){
            $action=$_REQUEST['action'];
        }
        else {
            $action = null;
        }
        $rep=__DIR__.'/../';
        switch($action){
            case null:require($rep."Vues/PageConnection.php");break;
            case 'valider': require($rep."Vues/PageBienvenue.php");break;
            default :echo "gna";break;
        }
    }

    public function ajouterClient(){
        $this->login=$_REQUEST['login'];
        $this->password=$_REQUEST['password'];
    }
}

//neRienFaire
//afficherLesNews
//ajouterNews
//supprimerNews
//choisirUneNews
//-----
//afficherLesClient
//supprimerClient
//choisirUnClient
//seConnecter
//seDeconnecter