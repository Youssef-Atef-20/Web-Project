<?php
$servername = "sql203.infinityfree.com";
$username = "if0_41784483";
$password = "Yousefatef1212";
$dbname = "if0_41784483_travel";

// Try to connect, if db doesn't exist we catch the error in setup.php
try {
    $conn = new mysqli($servername, $username, $password, $dbname);
} catch (Exception $e) {
    // If database doesn't exist, try connecting without db selection
    $conn = new mysqli($servername, $username, $password);
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
