<?php

class Connetion{
    private static $servername = 'localhost';
    private static $username = 'root';
    private static $password = '';
    private static $dbname = 'cours';
    private static $instance = null;
    private static $connx;

    private function __construct(){
     if(!self::$connx){
        try{
            self::$connx = new PDO('mysql:host='.self::$servername.';dbname='.self::$dbname.';charset=utf8',self::$username,self::$password);
            self::$connx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die("Connection failed: " . $e->getMessage());
        }
     }
    } 
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Connetion();
        }
        return self::$instance;
    }
    public function getConnexion(){
        return self::$connx ;
    }
}