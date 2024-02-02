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

$id = $_GET['id'];
$nickName = $_GET['nickName'];
$lastName = $_GET['lastName'];
$firstName = $_GET['firstName'];
$weight = $_GET['weight'];
$age = $_GET['age'];
$stable = $_GET['stable'];
$numberOfFight = $_GET['numberOfFight'];
$numberOfFightTied = $_GET['numberOfFightTied'];
$numberOfFightWon = $_GET['numberOfFightWon'];


$upd = $db ->exec("UPDATE `fighter` SET `nickName`='" . $nickName . "',
    `lastName`='" . $lastName . "',`firstName`='" . $firstName . "',`weight`='" . $weight . "',
    `age`='" . $age . "',`stable`='" . $stable . "',`numberOfFight`='" . $numberOfFight . "',`numberOfFightTied`='" . $numberOfFightTied . "',`numberOfFightWon`='" . $numberOfFightWon . "'
     WHERE `id`='" . $id . "'");

     if ($upd){
        echo json_encode('success !');
     }