<?php
include_once'Utilisateur.php';
require_once PROJECT_ROOT.'\src\Core\config\connexion.php';

class Etidient extends Utilisateur{
    private $id_cour;
    
    
    public function __construct(){}


    public function VisiteCours(){}
    public function accesCour(){}
    public function recherche(){}
    public function sincrirecour(){
        $query="INSERT INTO `inscription`(`etudiant_id`, `cours_id`) VALUES ('?','?')";
        $conn=Connexion::connect();
        $stmt=$conn->prepare($query);
        return $stmt->execute([$this->id,$this->id_cour]);

    }


}