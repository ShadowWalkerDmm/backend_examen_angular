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

$id = $_GET['id'];
$fighter01 = $_GET['fighter01'];
$fighter02 = $_GET['fighter02'];
$fightingDate = $_GET['fightingDate'];
$Winner = $_GET['Winner'];

$res = $db->exec("UPDATE `fight` SET `fighter01`='$fighter01',`fighter02`='$fighter02',`fightingDate`='$fightingDate',`Winner`='$Winner' WHERE `id`='$id'");
?>