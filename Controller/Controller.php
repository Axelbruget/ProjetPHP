<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 28/11/2017
 * Time: 14:11
 */

class Controller
{
    private $login;
    private $password;

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
            case 'valider': break;
            default :echo "gna";break;
        }
    }

    public function ajouterClient(){
        $this->login=$_REQUEST['login'];
        $this->password=$_REQUEST['password'];
        if($this->login!=NULL&&$this->password){
            
        }
        require("Vues/PageBienvenue.php");
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