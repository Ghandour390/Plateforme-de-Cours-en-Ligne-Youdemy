<?php
   include'catigorie.php';
   include'tag.php';
   include_once PROJECT_ROOT.'\src\Core\config\connexion.php';

    class Cours{
        private int $id_tag;
        private int $id_catigorie;
        private string $description;

    public function __construct(int $id_tag,int $id_catigorie , string $description){
        $this->id_tag = $id_tag;
        $this->id_catigorie = $id_catigorie;
        $this->description = $description ;
    }
    public function save() {
        $conn = connexion::connect();
        $sql = "INSERT INTO cours (id_tage , id_catigorie , description ) VALUES (? ,? ,?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([$this->id_tag ,$this->id_catigorie ,$this->description]);
    }
    public function getTagId(){return $this->id_tag;}
    public function getCatigorie(){return $this->id_catigorie;}
    public function getdescription(){return $this->description;}

    public function setTagId($id_tage){ $this->id_tag = $id_tage;}
    public function setCatigorieId($id_catigorie){ $this->id_catigorie = $id_catigorie ;}
    public function setdescription($description){$this->description = $description;}
    }