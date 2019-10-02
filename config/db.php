<?php
// Configuration de mes constantes pour PDO
define("DSN", "mysql:host=localhost;dbname=Projet1_Green_Strasbourg");
define("USER", "root");
define("PASS", "jeCode4WCS");

// Connection avec PDO
$pdo = new PDO(DSN, USER, PASS);
/*
$test = $pdo->query("SELECT * FROM acteurs");

$test2 = $test->fetchAll();

foreach ($test2 as $value){
    echo $value['nom'];
}*/