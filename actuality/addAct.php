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
extract($_POST);


// $res = $db->exec("INSERT INTO `fighter`(`nickName`, `lastName`, `firstName`, `weight`, `age`, `stable`, `numberOfFight`, `numberOfFight`, `pic`) VALUES ('" . $nickName . "','" . $lastName . "','" . $firstName . "','" . $weight . "','" . $age . "','" . $stable . "','" . $numberOfFight . "','" . $numberOfFight . "','" . $nouveau_nom_img . "')");

$reponse = $db->exec("INSERT INTO `actuality`(`titleAct`, `ContentAct`, `link`) 
                  VALUES ('$titleAct','$contentAct','$lienAct')");

if ($reponse){
    echo json_encode('success');
}