<?php

class Tag{
    private $id_tag = -2;
    private string $tag;

    public function __construct(string $tag){
        $this->tag = $tag;
        $this-> id_tag ;
    }
    public function getTag(){return $this->tag;}
    public function getIdTag(){ return $this->id_tag ;}

    public function setTag(string $tag){$this->tag = $tag;}
    public function setIdTag(int $id_tag){$this->id_tag = $id_tag;}
}