<?php
    $db = new PDO(
    'mysql:host=localhost;dbname=examen.angular;charset=utf8',
    'root',
    ''
    );
// accepter les requetes provenant du port 4200
header("Access-Control-Allow-Origin: http://localhost:4200" );
header("Access-Control-Allow-Headers: *" );
header('Access-Control-Allow-Credentials: true' );
header("Access-Control-Allow-Methods: *" );


$fighter01 = $_GET['fighter01'];
$fighter02 = $_GET['fighter02'];
$fightingDate = $_GET['fightingDate'];
//$time = $_GET['time'];
$Winner = $_GET['Winner'];

$res = $db->exec("insert into fight(fighter01,fighter02,fightingDate,Winner) values('$fighter01','$fighter02','$fightingDate','$Winner')" );
?>