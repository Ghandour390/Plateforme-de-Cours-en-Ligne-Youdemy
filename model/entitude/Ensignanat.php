<?php
 include_once'Utilisateur.php';
 include_once'cours.php';
 require_once PROJECT_ROOT.'\src\Core\config\connexion.php';

  class Ensignanat extends Utilisateur{
    private cours $cours ;
    private string $spicialite;
    

    public function __construct($lastename,$firstename,$email,$password){    
        parent::__construct($lastename,$firstename,$email,$password);
    }
    public function createCompte() {
     
      $query = 'INSERT INTO utilisateur (lastname,firsttname,email,PASSWORD)value (?,?,?,? )';
      $conn = connexion::connect();
      $stmt = $conn->prepare($query);
      return $stmt -> execute([$this->lastename,  $this->firstename, $this->email,$this->password]);
  }
    public function AjouteCours(int $id_tag , $id_catigorie ,string $description){
      // $tag = new Tag( $tag);
      // $tag->save();
      // $catigorie1 = new Catigorie($catigorie_id);
      // $catigorie1->saveCategorie()

        $cour = new Cours( $id_tag,$id_catigorie,$description);
        $cour ->save();
    }
    public function gestionCour(){}
    public function Voirstatistique(){}
    
   }