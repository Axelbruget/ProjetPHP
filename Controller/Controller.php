<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 28/11/2017
 * Time: 14:11
 */

class Controller
{
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
            case 'valider': $this->ajouterClient();break;
            default :echo "gna";break;
        }
    }

    public function ajouterClient(){
        //Ca marche pas si le mdp et le login sont les memes
        $_SESSION['login']=$_REQUEST['login'];
        $_SESSION['password']=$_REQUEST['password'];
        if($_SESSION['login']!=NULL&&$_SESSION['password']!=NULL){
            $modele=new ClientModele();
            if($modele->connection()==true){
                require("Vues/PageBienvenue.php");
            }

            else{
                echo "login ou mdp invalide.<br/>";
                require("Vues/PageConnection.php");
            }

        }
        else{
            echo "Erreur de saisie.<br/>";
            require("Vues/PageConnection.php");
        }
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