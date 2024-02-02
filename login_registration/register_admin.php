<?php


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

$host = 'localhost';
$db = 'examen.angular';
$user = 'root';
$password = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
$pdo = new PDO($dsn, $user, $password, $opt);

$fullName = $_POST['fullName'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO admin_info(fullName,email,password) VALUES('$fullName','$email','$password')";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':name', $fullName);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->execute();

echo json_encode(['status' => 'success', 'message' => 'Registration successful']);
?>
