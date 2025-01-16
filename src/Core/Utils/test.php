<?php
define('PROJECT_ROOT', dirname(dirname(dirname(__DIR__ ))));
// die(PROJECT_ROOT.'\model\entitude\admin.php');



require_once PROJECT_ROOT.'\model\entitude\admin.php';

// die(PROJECT_ROOT);

include_once PROJECT_ROOT .'\model\entitude\admin.php';
include_once PROJECT_ROOT.'\src\Core\config\connexion.php';
require_once PROJECT_ROOT.'\model\entitude\Ensignanat.php';
require_once PROJECT_ROOT.'\model\entitude\cours.php';


echo PROJECT_ROOT;
$ensignant1 = new Ensignanat("omar","nour","nour@gmail.com","ruihaeliu");

// $ensignant1->AjouteCours("la tomistique","fysique","qjfnqs");
var_dump($ensignant1);

var_dump($ensignant1 ->createCompte());
var_dump(Connexion::connect());

$ensignant1->AjouteCours(3,2,"lkjbgflqdkjb");
