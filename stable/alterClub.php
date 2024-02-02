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

$stableName = $_GET['stableName'];
$id = $_GET['id'];

//extract data


$res = $db->exec("UPDATE `stable` SET `stableName`='".$stableName."' WHERE `id`='".$id."'" );

if ($res){
    echo json_encode ('success !') ;
}
?>