<?php
 include_once'Utilisateur.php';
 include_once'cours.php';
 require_once PROJECT_ROOT.'\src\Core\config\connexion.php';

 

  class Ensignanat extends Utilisateur{
   
    private cours $cours ;
  


    

    public function __construct($lastename,$firstename,$email,$password,$PHONE,$id_role,$id = null,$statuts = "pending"){    
        parent::__construct($lastename,$firstename,$email,$password ,$PHONE,$id_role,$id,$statuts = "pending");
    }

    // crud

    public function delete() {
      $conn = Connexion::connect();
      $sql = "DELETE FROM utilisateur WHERE id=?";
      $stmt = $conn->prepare($sql);
      return $stmt->execute([$this->id]);
  }

    public function createCompte() {
     
      $query = 'INSERT INTO `utilisateurs`(`firstname`, `lastname`, `email`, `password`, `role_id`, `phone`, `status`) VALUES (?,?,?,?,?,?,?)';
      $conn = connexion::connect();
      $stmt = $conn->prepare($query);
      return $stmt -> execute([$this->firstename,  $this->lastename, $this->email,$this->password,$this->id_role,$this->PHONE,$this->statuts]);
  }
  public static function getAll() {
    $conn = Connexion::connect();
    $sql = "SELECT * FROM utilisateurs";
    return $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
} 

public static function getById($id) {
  $conn = Connexion::connect();
  $sql = "SELECT * FROM utilisateurs WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id]);
  return $stmt->fetch(PDO::FETCH_ASSOC);
}
public static function search($term) {
  $conn = Connexion::connect();
  $sql = "SELECT * FROM utilisateurs WHERE lastname LIKE ? OR firsttname LIKE ? OR email LIKE ? or PHONE ?";
  $stmt = $conn->prepare($sql);
  $term = "$term%";
  $stmt->execute([$term, $term, $term, $term]);
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


    public function AjouteCours(int $id_tag , $id_catigorie ,string $description){
      // $tag = new Tag( $tag);
      // $tag->save();
      // $catigorie1 = new Catigorie($catigorie_id);
      // $catigorie1->saveCategorie()
       
       
        $cour = new Cours( );
        $cour ->save();
    }
    public function getetudent(){
      $conn=Connexion::connect();
      $query="SELECT *FROM utilisateurs INNER JOIN cours ON utilisateurs.id=cours.user_id
              WHERE utilisateurs.role_id=1";
      return $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);

    }
    private function getStudentsForCourse($coursId) {
      $conn=Connexion::connect();
      $query = "SELECT* FROM utilisateurs  
              JOIN cours  ON utilisateurs.id = cours.id 
              WHERE cours.id = ?";
       return $conn->query($query)->fetchAll(PDO::FETCH_ASSOC);       
              }
    public function gestionCour(){}
    public function Voirstatistique(){}
    
   }