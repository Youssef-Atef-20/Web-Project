<?php
include 'db.php';

$conn->select_db("ocean_pearl_db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $check_in = $conn->real_escape_string($_POST['check_in']);
    $check_out = $conn->real_escape_string($_POST['check_out']);
    $room_type = $conn->real_escape_string($_POST['room_type']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO bookings (name, email, check_in, check_out, room_type, message)
    VALUES ('$name', '$email', '$check_in', '$check_out', '$room_type', '$message')";

    if ($conn->query($sql) === TRUE) {
        $success_msg = "Booking submitted successfully! We will contact you soon.";
        // Redirect back with success message
        header("Location: contact.php?status=success");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
