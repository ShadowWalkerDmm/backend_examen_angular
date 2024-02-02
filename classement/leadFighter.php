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
$order =$db->query("SELECT * FROM fighter ORDER BY numberOfFightWon desc")->fetchAll(PDO::FETCH_ASSOC);
echo json_encode ($order) ;
?>