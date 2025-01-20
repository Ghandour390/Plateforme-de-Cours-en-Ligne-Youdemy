<?php


abstract class Utilisateur{
    protected $id;
    protected string $lastename;
    protected string $firstename;
    protected string $email ;
    protected string $password ;
    protected int $id_role;
    protected string $PHONE;
    protected $statuts = "pending";
   
    // protected Role $role;
  

    public function __construct($lastename ,$firstename ,$email , $password ,$PHONE,$id_role,$id=null,$statuts){
        $this->lastename = $lastename;
        $this->firstename = $firstename;
        $this->email = $email ;
        $this->password = $password;
        $this->id = $id ;
        $this-> PHONE = $PHONE;
        $this->id_role = $id_role;
        $this->statuts = $statuts;

    }
   
    public function singup($lastename,$firstename,$email,$password){}
    public function getLasteName(){ return $this->lastename  ;}
    public function getId(){ return $this->id  ;}
    public function getFirsteName(){ return $this->firstename ;}
    public function getEmail(){ return $this->email ;}
    public function getPassword(){ return $this->password ;}

    public function create(){}


    public function setLasteName($lastename){$this->lastename = $lastename ;}
    public function setFirsteName($firstename){$this->firstename = $firstename;}
    public function setEmail($email){$this->email = $email;}
    public function setPassword($password){$this->password = $password;}


    
}



