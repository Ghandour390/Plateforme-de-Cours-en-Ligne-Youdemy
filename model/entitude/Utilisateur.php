<?php


abstract class Utilisateur{
    private $id;
    private string $lastename;
    private string $firstename;
    private string $email ;
    private string $password ;
    // private bool $role jhjjj;

    public function __construct($lastename ,$firstename ,$email , $password ){
        $this->lastename = $lastename;
        $this->firstename = $firstename;
        $this->email = $email ;
        $this->password = $password;
        $this->id = -1 ;
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



