<?php

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
        switch($action) {
            case null:
                require($rep . "Vues/PageConnection.php");
                break;
            case 'valider':
                $this->seConnecter();
                break;
            default :
                echo "autre erreur";
                break;
        }
    }

    //seConnecter
    //Ca marche pas si le mdp et le login sont les memes
    public function seConnecter(){
        $_SESSION['clientCourant']=new Client("-1",$_REQUEST['login'],$_REQUEST['password'],"undifined");
        if(($_SESSION['clientCourant']->getLogin()!=NULL&&$_SESSION['clientCourant']->getMdp()!=NULL)
            &&($_SESSION['clientCourant']->getLogin()!=$_SESSION['clientCourant']->getMdp())){
            $modele=new ClientModele();
            $_SESSION['clientCourant']->setId($modele->connection());
            if($_SESSION['clientCourant']->getId()!=-1){
                $_SESSION['clientCourant']->setStatut($modele->getStatut($_SESSION['clientCourant']->getId()));
                if($_SESSION['clientCourant']->getId()==2){ //juguigon + lumiere = accès à une partie ou je test des trucs
                    var_dump($_SESSION);
                    require("Vues/PageAdmin.php");
                }
                else {
                    require("Vues/PageBienvenue.php");
                }
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

//seDeconnecter