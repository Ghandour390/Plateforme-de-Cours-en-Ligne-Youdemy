<?php
include'Utilisateur.php';


class Admin extends Utilisateur{
     
    public function __construct($lastename,$firstename,$email,$password,$PHONE,$id,$role){    
        parent::__construct($lastename,$firstename,$email,$password, $PHONE,$role,$id);
    }
    public function insertTag($id_cour,$id_tag)  {
        $conn=Connexion::connect();
        $sql="INSERT INTO `cours_tags`(`cours_id`, `tag_id`) VALUES ( ?,?)";
        $stmt=$conn->prepare($sql);
        return $stmt->execute([$id_cour,$id_tag]); 
    }
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
