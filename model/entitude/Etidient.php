<?php
include_once'Utilisateur.php';
require_once PROJECT_ROOT.'\src\Core\config\connexion.php';

class Etidient extends Utilisateur{
    private $id_cour;
    
    
    public function __construct(){}


    public function VisiteCours(){
        $conn=Connexion::connect();
        $query="SELECT * FROM `cours`";
        return $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function accesCour(){
        $conn=Connexion::connect();
        $query="SELECT * FROM utilisateurs INNER JOIN cours ON cours.user_id=utilisateurs.id WHERE utilisateurs.role_id=3;";
        return $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);
  
    }
    public function recherche(){}
    public function sincrirecour(){
        $query="INSERT INTO `inscription`(`etudiant_id`, `cours_id`) VALUES ('?','?')";
        $conn=Connexion::connect();
        $stmt=$conn->prepare($query);
        return $stmt->execute([$this->id,$this->id_cour]);

    }


}