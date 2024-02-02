<?php
$db = new PDO(
    'mysql:host=localhost;dbname=examen.angular;charset=utf8',
    'root',
    ''
);
// accepter les requetes provenant du port 4200
header("Access-Control-Allow-Origin: http://localhost:4200");
header("Access-Control-Allow-Headers: *");
header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Methods: *");

// extraction des données
extract($_GET);

$updateActu = $db->exec("UPDATE `actuality` SET `titleAct`='$titleAct',`ContentAct`='$ContentAct',`link`='$link' WHERE `id`='$id'");

if ($updateActu){
    echo json_encode('success');
}

