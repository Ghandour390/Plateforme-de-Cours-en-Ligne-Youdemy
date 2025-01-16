<?php
// require_once'/';

class Catigorie{
    private $id_catigorie;
    private $catigorieName;

public function __construct(string $catigorie){}

public function saveCategorie() {
    $conn = connexion::connect();
    $sql = "INSERT INTO categories (categorie) VALUES (?)";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$this->catigorieName]);
}
public function getIdCatigorie(){
    return $this->id_catigorie;
}
public function getcategorie(){$this->catigorieName;}

    public function setId($id){ $this->id_catigorie = $id;}

    public function setCategorie($catigorie){$this->catigorieName = $catigorie;}

}