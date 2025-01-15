<?php
   include_once'catigorie.php';
   include_once'tag.php';

    class Cours{
        private Tag $tag ;
        private Catigorie $catigorie;
        private string $description;

    public function __construct(tag $tag,Catigorie $catigorie , string $description){
        $this->tag = $tag;
        $this->catigorie = $catigorie ;
        $this->description = $description ;
    }
    public function save(){
        $query = 'INSERT INTO FROM cours('   ;     
        Connetion::getInstance()->getConnexion();

    }
    public function getTeg(){return $this->tag;}
    public function getCatigorie(){return $this->catigorie;}
    public function getdescription(){return $this->description;}

    public function setTeg($tag){ $this->tag = $tag;}
    public function setCatigorie($catigorie){ $this->catigorie = $catigorie ;}
    public function setdescription($description){$this->description = $description;}
    }