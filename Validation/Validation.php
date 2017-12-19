<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 19/12/2017
 * Time: 12:51
 */

class Validation
{


    public function __construct()
    {

    }

    public function valUser($login,$mdp){

        if(empty($login))
            throw new Exception('Pas de name');
        if(empty($mdp))
            throw new Exception('Pas de description');

        if (filter_var($login, FILTER_SANITIZE_STRING) != true){
            throw new Exception('login incorrect');
        }
        if (filter_var($mdp, FILTER_SANITIZE_STRING) != true){
            throw new Exception('login incorrect');
        }
    }
}