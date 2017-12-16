<?php

class Controller
{
    private $action;

    public function __construct(){
        session_start();
        if(isset($_REQUEST['action'])){
            $this->action=$_REQUEST['action'];
        }
        else {
            $this->action = null;
        }
        $rep=__DIR__.'/../';
        switch($this->action) {
            case null:
                require($rep . "Vues/PageConnection.php");
                break;
            case 'valider':
                $this->seConnecter();
                break;
            case 'ChargerBase':
                require_once("Loading/LoadingDataBase.php");
                require($rep . "Vues/PageConnection.php");
                break;
            default :
                echo "autre erreur";
                break;
        }
    }

    //seConnecter
    //Ca marche pas si le mdp et le login sont les memes
    public function seConnecter(){

        $modele=new ClientModele();
        $_SESSION['clientCourant']=new Client("-1",$_REQUEST['login'],$_REQUEST['password'],"undifined");
        if(($_SESSION['clientCourant']->getLogin()!=NULL&&$_SESSION['clientCourant']->getMdp()!=NULL)
            &&($_SESSION['clientCourant']->getLogin()!=$_SESSION['clientCourant']->getMdp())){
            $_SESSION['clientCourant']->setId($modele->connection());
            if($_SESSION['clientCourant']->getId()!=-1){
                $_SESSION['clientCourant']->setStatut($modele->getStatut($_SESSION['clientCourant']->getId()));
                if($_SESSION['clientCourant']->getId()==2){ //juguigon + lumiere = accès à une partie ou je test des trucs
                    var_dump($_SESSION);
                    require("Vues/PageAdmin.php");
                    $this->afficherLesNews();
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

    //afficherLesNews
    public function afficherLesNews(){
        $modele=new NewsModele();
        $tabNews=$modele->chargerLesNews();
        foreach ($tabNews as $value){
            echo "$value<br/>";
        }
        echo "fin";
    }
}

//neRienFaire
//ajouterNews
//supprimerNews
//choisirUneNews
//-----
//afficherLesClient
//supprimerClient
//choisirUnClient
//seDeconnecter