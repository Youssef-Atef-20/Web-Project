<!-- <?php
include 'db.php';

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS ocean_pearl_db";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists.<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the database
$conn->select_db("ocean_pearl_db");

// Create tables
$sql = "CREATE TABLE IF NOT EXISTS bookings (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    check_in DATE NOT NULL,
    check_out DATE NOT NULL,
    room_type VARCHAR(50) NOT NULL,
    message TEXT,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table bookings created successfully or already exists.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

$conn->close();
echo "<br><a href='index.php'>Go back to Home Page</a>";
?> -->
