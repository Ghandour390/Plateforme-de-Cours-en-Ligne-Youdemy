<?php
include'Utilisateur.php';


class Admin extends Utilisateur{
     
    public function __construct($lastename, $firstename, $email, $password){
        parent::__construct($lastename,$firstename,$email,$password);
    }
    public function insertTag()  {}
    public function gestionContonu(){}
    public function gestionUtilisateur(){
        
    }
    public function validationCompte(){}
        
    }
