<?php

class NewsModele
{
    private $ng;

    public function __construct()
    {
        $this->ng=new NewsGateway();
    }

    public function afficherLesNews(){
        $this->ng->display();
    }

    public function chargerLesNews(){
        $tabNews=array();
        $res=$this->ng->getDisplay();
        foreach ($res as $arg){
            array_push($tabNews,new News($arg[0],$arg[1],$arg[2],$arg[3],$arg[4],$arg[5]));
        }
        return $tabNews;
    }
}