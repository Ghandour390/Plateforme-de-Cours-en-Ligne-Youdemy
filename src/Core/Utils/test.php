<?php
include_once'../../../model/entitude/admin.php';

require_once '../../../model/entitude/Ensignanat.php';

$ensignant1 = new Ensignanat("omar","nour","nour@gmail.com","ruihaeliu");
$ensignant1->AjouteCours("la tomistique","fysique","qjfnqs");
var_dump($ensignant1);


