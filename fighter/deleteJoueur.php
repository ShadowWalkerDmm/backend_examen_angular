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

$request = $db->exec("DELETE FROM `fighter` WHERE `id`='" . $id . "'");

if ($request){
    echo 'success';
}else{
    echo 'error';
}