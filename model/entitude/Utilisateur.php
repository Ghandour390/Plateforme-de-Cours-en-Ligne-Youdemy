<?php


abstract class Utilisateur{
    protected $id;
    protected string $lastename;
    protected string $firstename;
    protected string $email ;
    protected string $password ;
  

    public function __construct($lastename ,$firstename ,$email , $password ,$id=0){
        $this->lastename = $lastename;
        $this->firstename = $firstename;
        $this->email = $email ;
        $this->password = $password;
        $this->id = $id ;
    }
   
    public function singup($lastename,$firstename,$email,$password){}
    public function getLasteName(){$this->lastename  ;}
    public function getFirsteName(){$this->firstename ;}
    public function getEmail(){$this->email ;}
    public function getPassword(){$this->password ;}

    public function create(){}


    public function setLasteName($lastename){$this->lastename = $lastename ;}
    public function setFirsteName($firstename){$this->firstename = $firstename;}
    public function setEmail($email){$this->email = $email;}
    public function setPassword($password){$this->password = $password;}


    
}



