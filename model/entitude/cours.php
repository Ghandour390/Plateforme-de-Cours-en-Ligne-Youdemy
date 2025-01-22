<?php
   include'catigorie.php';
   include'tag.php';
   include_once PROJECT_ROOT.'\src\Core\config\connexion.php';

    class Cours{
        private int $id_cour;
        private string $titre;
        private int $id_tag;
        private int $id_catigorie;
        private int $id_ensignant;
        private string $description;

        public function __call($name, $arguments) {
            if($name == "CoursBuilder"){
                if(count($arguments) == 2){
                    $this->titre = $arguments[0];
                    $this->description = $arguments[1];
                } 
                if(count($arguments) == 3){
                    $this->id_cour = $arguments[0];
                    $this->titre = $arguments[1];
                    $this->description = $arguments[2];
                } 
                if(count($arguments) == 5){
                    $this->id_cour = $arguments[0];
                    $this->titre = $arguments[1];
                    $this->description = $arguments[2];
                  
                    // $this->etudiants = $arguments[4];   
                    $this->id_ensignant = $arguments[3];   
    
                    $this->id_tag = $arguments[4];   
                    
                } 
            }
        }
    
    public function save() {
        $conn = connexion::connect();
        $sql = "INSERT INTO cours (id_tage , id_catigorie , description ) VALUES (? ,? ,?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([$this->id_tag ,$this->id_catigorie ,$this->description]);
    }
    public function update() {
        $conn = Connexion::connect();
        $sql = "UPDATE cours SET id_tage=?, id_catigorie=?, description=?, WHERE id_cour=?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([$this->id_tag ,$this->id_catigorie ,$this->description]);
    }

    public function delete() {
        $conn = Connexion::connect();
        $sql = "DELETE FROM cours WHERE id_cour=?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([$this->id_cour]);
    }

    public static function getAll() {
        $conn = Connexion::connect();
        $sql = "SELECT * FROM cours";
        return $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id_cour) {
        $conn = Connexion::connect();
        $sql = "SELECT * FROM cours WHERE id_cour = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id_cour]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function search($term) {
        $conn = Connexion::connect();
        $sql = "SELECT * FROM cours WHERE id_tage LIKE ? OR id_catigorie LIKE ? OR description LIKE ?";
        $stmt = $conn->prepare($sql);
        $term = "$term%";
        $stmt->execute([$term, $term, $term]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getcousensignant($id){
        $conn = Connexion::connect();
        $sql = "SELECT * FROM utilisateurs WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getcourscatigorie($categorieName){
        $conn = Connexion::connect();
        $sql = "SELECT * FROM cours INNER JOIN categories ON cours.categorie_id=cours.id
                                    WHERE categories.name= ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$categorieName]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
    public function getTagId(){return $this->id_tag;}
    public function getCatigorie(){return $this->id_catigorie;}
    public function getdescription(){return $this->description;}

    public function setTagId($id_tage){ $this->id_tag = $id_tage;}
    public function setCatigorieId($id_catigorie){ $this->id_catigorie = $id_catigorie ;}
    public function setdescription($description){$this->description = $description;}
}