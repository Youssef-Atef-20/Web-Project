<?php

$servername = "sql203.infinityfree.com";
$username = "if0_41784483";
$password = "Yousefatef1212";
$dbname = "if0_41784483_hotel";

$conn = new mysqli(
    $servername,
    $username,
    $password,
    $dbname
);

if ($conn->connect_error) {

    die(
        "Connection failed: " . $conn->connect_error
    );

}

?>