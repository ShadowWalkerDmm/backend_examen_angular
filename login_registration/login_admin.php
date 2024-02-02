<?php

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
    header("Content-Type: application/json");

    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);

    $username = $request->username;
    $password = $request->password;

    // Your database connection details
    $servername = "localhost";
    $usernameDB = "root";
    $passwordDB = "";
    $dbname = "examen.angular";

    // Create connection
    $conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to fetch user details by username and password
    $sql = "SELECT * FROM admin_info WHERE fullName = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User successfully logged in
        // echo json_encode(["success" => true, "message" => "User successfully logged in."]);
        $info=["success" => true, "message" => "User successfully logged in."];
        echo json_encode($info);
    } else {
        // Invalid username or password
        // echo json_encode(["success" => false, "message" => "Invalid username or password."]);
        $info=["success" => false, "message" => "Invalid username or password."];
        echo json_encode($info);
    }

    $conn->close();
?>