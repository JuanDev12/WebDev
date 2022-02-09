<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function connectServer() {
    $server_name = "localhost";
    $user_name = "root";
    $password = "";

    $conn = new mysqli($server_name, $user_name, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
      echo "Connected successfully";
    
    return $conn;
}

function createDatabase() {
    $conn = connectServer();

    $db_name = "main_database";

    $sql = "CREATE DATABASE IF NOT EXISTS " . $db_name;

    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    return $db_name;
}

function createTable() {
    $conn = connectDatabase();

    $sql = "CREATE TABLE IF NOT EXISTS usuarios (
        id INT(3) AUTO_INCREMENT PRIMARY KEY,
        firstName VARCHAR(20) NOT NULL,
        email VARCHAR(100) NOT NULL,
        password_1 VARCHAR(30) NOT NULL,
        mobile_phone INT
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    return "usuarios";
}

function connectDatabase() {

    $database_name = createDatabase();
    $server_name = "localhost";
    $user_name = "root";
    $password = "";

    $conn = new mysqli($server_name, $user_name, $password, $database_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
      echo "Connected successfully";
    return $conn;
}

function uploadData() {
    $conn = connectDatabase();
    $table = createTable();

    $first_name =  $_REQUEST['name_1'];
    $email = $_REQUEST['email_1'];
    $password=  $_REQUEST['password_1'];
    $mobilePhone = $_REQUEST['mobilePhone_1'];

    $sql = "INSERT INTO usuarios (firstName, email, password_1, mobile_phone)
    VALUES ($first_name , $email, $password, $mobilePhone)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    return $conn;
}

$test = uploadData();

?>
</body>
</html>