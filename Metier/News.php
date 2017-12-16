<?php

class News
{
    public $id;
    public $date;
    public $nomSite;
    public $url;
    public $description;

    public function __construct($id,$date,$nomSite,$url,$description,$image)
    {
        $this->id=$id;
        $this->date=$date;
        $this->nomSite=$nomSite;
        $this->url=$url;
        $this->description=$description;
        $this->image=$image;
    }
    public function __toString()
    {
        return "id : $this->id<br/>date : $this->date<br/>nomSite : $this->nomSite<br/>lien : <a href=".$this->url.">$this->description</a><br/>";
    }

    public function getId(){
        return $this->id;
    }
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
    public function getImage(){
        return $this->image;
    }

    public function setId($id){
        $this->id=$id;
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
    public function setImage($image){
        $this->image=$image;
    }
}