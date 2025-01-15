<?php
 include_once'Utilisateur.php';
 include_once'cours.php';

 class Ensignanat extends Utilisateur{
    private cours $cours ;
    private string $spicialite;
    

    public function __construct($lastename,$firstename,$email,$password){    
        parent::__construct($lastename,$firstename,$email,$password);
    }

    public function AjouteCours( $tag ,$catigorie ,string $description){
      
       $this->cours = $cour = new Cours(new Tag($tag),new Catigorie($catigorie),$description);
    }
    public function gestionCour(){}
    public function Voirstatistique(){}

    public function create() {
        
        
    }
 }
