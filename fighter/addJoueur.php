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


$img_nom = $_FILES['pic']['name'];
$tmp_nom = $_FILES['pic']['tmp_name'];
$time = time();
$nouveau_nom_img = $time . $img_nom;


// $deplacer_image=move_uploaded_file($tmp_nom,"upload/".$nouveau_nom_img);
$deplacer_image = move_uploaded_file($tmp_nom, "../../examen.angular/src/assets/uploads/" . $nouveau_nom_img);


// extraction des données
extract($_POST);


$res = $db->exec("INSERT INTO `fighter`(`nickName`, `lastName`, `firstName`, `weight`, `age`, `stable`, `numberOfFight`, `numberOfFightTied`, `numberOfFightWon`,`link`, `pic`) VALUES ('" . $nickName . "','" . $lastName . "','" . $firstName . "','" . $weight . "','" . $age . "','" . $stable . "','" . $numberOfFight . "','" . $numberOfFightTied . "','" . $numberOfFightWon . "','" . $link . "','" . $nouveau_nom_img . "')");
