<?php
require_once PROJECT_ROOT.'\src\Core\config\connexion.php';
require_once 'cours.php';


class Visiteur{
    public function AfficheCours(){
        $cour = new Cours();
        $cour->getAll();
    }
    public function recherche(){}
    


}





?>