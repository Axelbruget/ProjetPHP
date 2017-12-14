<?php

class News
{
    private $date;
    private $nomSite;
    private $url;
    private $description;

    public function getDate(){
        return $this->date;
    }
    public function getNomSite(){
        return $this->nomSite;
    }
    public function getUrl(){
        return $this->url;
    }
    public function getDescription(){
        return $this->description;
    }

    public function setDate($date){
        $this->date=$date;
    }
    public function setNomSite($nomSite){
        $this->nomSite=$nomSite;
    }
    public function setUrl($url){
        $this->url=$url;
    }
    public function setDescription($description){
        $this->description=$description;
    }
}