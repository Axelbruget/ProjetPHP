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
            case 'Valider':
                $this->seConnecter();
                break;
            case 'ChargerBase':
                require_once("Loading/LoadingDataBase.php");
                require_once("Vues/PageConnection.php");
                break;
            case 'AjouterClient':
                $this->ajouterUtilisateur('client');
                require_once("Vues/SuperAdmin.php");
                break;
            case 'AjouterAdmin':
                $this->ajouterUtilisateur('admin');
                require_once("Vues/SuperAdmin.php");
                break;
            case 'Ajouter':
                $this->ajouterUtilisateur('client');
                require_once("Vues/PageAdmin.php");
                break;
            case 'SupprimerUtilisateur':
                $this->supprimerUtilisateur();
                break;
            case 'SupprimerClient':
                $this->supprimerClient();
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
                if($_SESSION['clientCourant']->getStatut()=='admin'){ // si admin
                    require("Vues/PageAdmin.php");
                }
                else if ($_SESSION['clientCourant']->getStatut()=='client'){ // si client
                    require("Vues/PageBienvenue.php");
                }
                else if ($_SESSION['clientCourant']->getStatut()=='superadmin'){ // si superadmin
                    require("Vues/SuperAdmin.php");
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

    public function ajouterUtilisateur($type){
        $clientgateway = new ClientGateway();
        $id = $clientgateway->getNombreUtilisateurs();
        $_SESSION['clientCourant']=new Client($id,$_REQUEST['login'],$_REQUEST['password'],$type);
        $clientgateway = new ClientGateway();
        $clientgateway->insertClient($_SESSION['clientCourant']);
    }

    public function supprimerUtilisateur(){
        $clientgateway = new ClientGateway();
        $clientgateway->deleteUtilisateur($_REQUEST['id']);
        require_once("Vues/SuperAdmin.php");
    }

    public function supprimerClient(){
        $clientgateway = new ClientGateway();
        $clientgateway->deleteClient($_REQUEST['id']);
        require_once("Vues/PageAdmin.php");
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