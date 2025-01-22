<?php
include'Utilisateur.php';


class Admin extends Utilisateur{
     
    public function __construct($lastename,$firstename,$email,$password,$PHONE,$id,$role){    
        parent::__construct($lastename,$firstename,$email,$password, $PHONE,$role,$id);
    }
    public function insertTag()  {}
    public function gestionContonu(){}
    public function gestionUtilisateur(){
        
    }
    public function validationCompte($statuts){
        $conn=Connexion::connect();
        $sql="UPDATE `utilisateurs` SET `status`=?";
        $stmt=$conn->prepare($sql);
        return $stmt->execute([$statuts]);

      
    }
        
    }
