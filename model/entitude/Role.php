<?php
require_once 'Utilisateur.php';
include_once PROJECT_ROOT."\srs\Core\config\connexion.php";

class Role{
    private $id_role;
    private $roleName;
    
    public function __construct(){
     
    }
    public function hasrole($roleName){
        $conn=Connexion::connect();
        $sql="SELECT * FROM `roles` WHERE role_name=?";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$roleName]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?> 